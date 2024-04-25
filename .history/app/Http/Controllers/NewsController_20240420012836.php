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
        // dd($request->all());
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

        $tags = $request->get('tags');

        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->user_id = auth()->user()->id;
        $news->save();

        if ($tags) {
            $news->tags()->attach($tags);
        }

        $userRole = auth()->user()->role;
        switch ($userRole) {
            case auth()->user()->role == 'admin':
                return redirect()->route('news.all')->with('success', "News created successfully.");
                break;

            case auth()->user()->role == 'hero':
                return redirect()->route('news.index')->with('success', "News created successfully.");
                break;

                default:
                return view('home');
        }
    }
    public  function edit($id)
    {
        $news = DB::table('news')->join('users', 'news.user_id', '=', 'users.id')
        ->select('news.*', 'users.role')->where('news.id', $id)->first();
        if (auth()->user() &&  (((auth()->user()->role == 'admin') && $news->role != 'hero') || ((auth()->user()->role == 'hero') && auth()->user()->id == $news->user_id))) {
            return  view("news.edit", compact('news'));
        } else {
            return view('errors.error404');
        }
    }
    public function update(Request $request, $id)
    {
        $news = DB::table('news')->where('id', $id)->first();
        $news = News::find($id)
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

            return redirect()->route('news.show', $id)->with('success', 'News updated successfully.');
        } else {
            return view('errors.error404');
        }
    }


    public function index(Request $request)
    {
        // dd(Tag::find(1)->news);
        // if ($request->has('search')) {
        //     $search = $request->get('search');
        //     $news = News::whereHas("user", function ($query) use ($search) {
        //         $query->where("firstName", "LIKE", "%$search%")
        //         ->orWhere("role", "LIKE", "%$search%");
        //     })->orWhere("title", "LIKE", "%$search%")
        //     ->orWhere("content", "LIKE", "%$search%")
        //     ->join('users', 'news.user_id', '=', 'users.id')
        //     ->select('news.*', 'users.firstName', 'users.lastName', 'users.role')
        //     ->orderBy('news.created_at', 'desc')
        //     ->get();
        // }
        if ($request->has('search')) {
            $search = $request->get('search');
            $news = News::whereHas("user", function ($query) use ($search, $request) {
                $query->where("firstName", "LIKE", "%$search%")
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
            $news = DB::table('news')
            ->join('users', 'news.user_id', '=', 'users.id')
            ->select('news.*', 'users.firstName','users.lastName', 'users.role')
            ->orderBy('news.created_at', 'desc')
            ->get();
        }

        $userRole = auth()->user()->role;
        switch ($userRole) {
            case auth()->user()->role == 'admin':
                return view('news.all', compact('news'));
                break;

            case auth()->user()->role == 'hero':
                return view('news.all', compact('news'));
                break;

            case auth()->user()->role == 'user':
                return view('news.index', compact('news'));
                break;

            default:
                return view('home');
        }
    }
    public function show(int $id) {
        $news = News::find($id)
        ->join('users', 'news.user_id', '=', 'users.id')
        ->select('news.*', 'users.firstName', 'users.lastName', 'users.role')
        ->where('news.id', $id)
        ->first();
        
        $tags= tags

        $userRole = auth()->user()->role;
        switch ($userRole) {
            case auth()->user()->role == 'admin':
                return view('news.show-to-admin&hero', compact('news'));
                break;

            case auth()->user()->role == 'hero':
                return view('news.show-to-admin&hero', compact('news'));
                break;

            case auth()->user()->role == 'user':
                return view('news.show', compact('news'));
                break;

            default:
                return view('errors.error404');
        }
    }

    public  function delete($id) {
        $news = News::find($id);
        if(auth()->user() && ((auth()->user()->role == 'admin') || (auth()->user()->role == 'hero' && auth()->user()->id == $news->user_id))) {
            DB::table('news')->where('id', $id)->delete();
            $userRole = auth()->user()->role;
            switch ($userRole) {
                case auth()->user()->role == 'admin':
                    return redirect()->route('news.all')->with('success', "Chosen news deleted successfully");
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
// CREATE, STORE// SHOW, INDEX// EDIT, UPDATE // DESTROY
