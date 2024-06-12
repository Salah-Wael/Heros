<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Hero;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Exists;

class NewsController extends Controller{
    public function __construct(){
        $this->middleware('auth'); //->except([ 'index','show']);
    }

    public function create() {

        if (auth()->user() &&  ((auth()->user()->role == 'admin') || (auth()->user()->role == 'hero'))) {
            $tags = Tag::all();
            return view('news.create', ['tags' => $tags]);
        } else {
            return view('errors.error404');
        }
    }
    public function store(Request $request) {
        $data= $request->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,jfif,svg|max:2048'
            ],
            #errors
            [
                'image' . 'image' => "The image field must be an image.",
                'image' . 'mimes' => "The image field must be an image with extention (jpeg, jpg, png, jfif, or svg).",
            ]
        );

        $news = new News();

        $image = $request->file('image');
        $imageName= uniqid().$image->getClientOriginalName();
        $noSpacesString = str_replace(' ', '', $imageName);
        $image->move(public_path('assets/images/news'), $noSpacesString);
        $news->image = $noSpacesString;

        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->user_id = auth()->user()->id;
        $news->save();

        $tags = $request->get('tags');
        if ($tags) {
            $news->tags()->attach($tags);
        }

        return redirect()->route('news.index')->with('success', "News created successfully.");
    }
    public  function edit($id)
    {
        $news = DB::table('news')->join('users', 'news.user_id', '=', 'users.id')
        ->select('news.*', 'users.role')->where('news.id', $id)->first();
        if (auth()->user() &&  (((auth()->user()->role == 'admin') && $news->role != 'hero') || ((auth()->user()->role == 'hero') && auth()->user()->id == $news->user_id))) {
            $tags = Tag::all();
            return  view("news.edit", compact('news', 'tags'));
        } else {
            return view('errors.error404');
        }
    }
    public function update(Request $request, $id)
    {
        // $news = DB::table('news')->where('id', $id)->first();
        $news = News::findOrFail($id)
        ->join('users', 'news.user_id', '=', 'users.id')
        ->select('news.*', 'users.role')
        ->where('news.id', $id)
        ->first();

        if (auth()->user() && (((auth()->user()->role == 'admin') && $news->role != 'hero') || (auth()->user()->role == 'hero' && auth()->user()->id == $news->user_id))) {
            $data = $request->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'image' => 'image|mimes:jpeg,jpg,png,jfif,svg|max:2048',
            ], [
                'image.image' => "The image field must be an image.",
                'image.mimes' => "The image field must be an image with extension jpeg, jpg, png, jfif, or svg.",
            ]);

            if($news->title != $request->title || $news->content != $request->content){
                $news->updated_at = now();
            }

            $updateData = [
                'title' => $data['title'],
                'content' => $data['content'],
            ];

            if ($request->hasfile('image')) {
                File::delete(public_path('assets/images/news/') . $news->image);
                $image = $request->file('image');
                $imageName = uniqid() . $image->getClientOriginalName();
                $image->move(public_path('assets/images/news'), $imageName);
                $updateData['image'] = $imageName;
                $updateData['updated_at'] = now();
            }
            DB::table('news')->where('id', $id)->update($updateData);

            // // $tags = $news->tags();
            // $tags = $news->tags()->pluck('tag')->toArray();
            // // dd($tags);
            // // print_r($tags);
            // $tags = $request->get('tags');
            // if ($tags) {
            //     $tags = array_unique($tags);
            //     $news->tags()->attach($tags);
            //     $tags = array_unique($tags);
            // }

            // Retrieve existing tags from the $news model
            $existingTags = $news->tags()->pluck('tag')->toArray();

            // Retrieve new tags from the request
            $newTags = $request->get('tags', []);

            // Merge the existing tags with the new tags
            $allTags = array_merge($existingTags, $newTags);

            // Remove duplicates
            $uniqueTags = array_unique($allTags);
            dd

            // Attach the unique tags to the $news model
            $news->tags()->sync($uniqueTags);

            return redirect()->route('news.show', $id)->with('success', 'News updated successfully.');
        } else {
            return view('errors.error404');
        }
    }


    public function index(Request $request){

        if ($request->has('search')) {
            $search = $request->get('search');
            $news = News::with('tags')
            ->whereHas('tags', function ($query) use ($search) {
                $query->where('tag', 'LIKE', "%$search%");
            })
            ->orWhereHas("user", function ($query) use ($search, $request) {
                $query->whereRaw("CONCAT(firstName, ' ', lastName) LIKE ?", ["%$search%"])
                ->orWhere("firstName", "LIKE", "%$search%")
                ->orWhere("lastName", "LIKE", "%$search%")
                ->when($request->has('search') && $request->get('search') == 'hero', function ($query) use ($search) {
                    $query->orWhere("role", "LIKE", "%$search%");
                });
            })
            ->orWhere("title", "LIKE", "%$search%")
            ->orWhere("content", "LIKE", "%$search%")
            ->join('users', 'news.user_id', '=', 'users.id')
            ->select('news.*', 'users.firstName', 'users.lastName', 'users.role')
            ->orderBy('news.created_at', 'desc')
            ->get();

        }
        else{
            $news = News::with('tags')
            ->join('users', 'news.user_id', '=', 'users.id')
            ->select('news.*', 'users.firstName', 'users.lastName', 'users.role')
            ->orderBy('news.created_at', 'desc')
            ->get();
        }

        return view('news.index', compact('news'));
    }
    public function show(int $id) {
        $news = News::findOrFail($id)
        ->join('users', 'news.user_id', '=', 'users.id')
        ->select('news.*', 'users.firstName', 'users.lastName', 'users.role')
        ->where('news.id', $id)
        ->first();

        $tags = $news->tags;
        $relatedNews = [];
        $addedNewsIds = []; // Temporary array to keep track of added news IDs
        foreach ($tags as $tag) {
            foreach ($tag->news->where("id", "!=", $news->id) as $related) {
                if (!in_array($related->id, $addedNewsIds)) {
                    $relatedNews[] = $related;
                    $addedNewsIds[] = $related->id;
                }
            }
        }


        $userRole = auth()->user()->role;
        switch ($userRole) {
            case auth()->user()->role == 'admin':
                return view('news.show-to-admin&hero', compact('news', 'relatedNews'));
                break;

            case auth()->user()->role == 'hero':
                return view('news.show-to-admin&hero', compact('news', 'relatedNews'));
                break;

            case auth()->user()->role == 'user':
                return view('news.show', compact('news', 'relatedNews'));
                break;

            default:
                return view('errors.error404');
        }
    }

    public  function delete($id) {
        $news = News::find($id);
        if(auth()->user() && ((auth()->user()->role == 'admin') || (auth()->user()->role == 'hero' && auth()->user()->id == $news->user_id))) {

            File::delete(public_path('assets/images/news/') . $news->image);

            DB::table('news')->where('id', $id)->delete();
            $userRole = auth()->user()->role;
            switch ($userRole) {
                case auth()->user()->role == 'admin':
                    return redirect()->route('news.index')->with('success', "Chosen news deleted successfully");
                    break;

                case auth()->user()->role == 'hero':
                    return redirect()->route('news.index')->with('success', "Your news deleted successfully");
                    break;

                default:
                    return view('errors.error404');
            }
        }
        return view('errors.error404');
    }
}
//       C             R              U            D        , RESTful
// CREATE, STORE// SHOW, INDEX// EDIT, UPDATE // Delete
