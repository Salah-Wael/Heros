<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //->except([ 'index','show']);
    }
    public function index() {
        $news = DB::table('news')
        ->join('users', 'news.user_id', '=', 'users.id')
        ->select('news.*', 'users.firstName', 'users.lastName')
        ->orderBy('news.created_at', 'desc')
        ->get();
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
    // public function allNews() {
    //     // $news= DB::with('user')->orderBy('created_at', 'desc')->get();
    //     $news = DB::table('news')
    //     ->join('users', 'news.user_id', '=', 'users.id')
    //     ->select('news.*', 'users.firstName', 'users.lastName')
    //     ->orderBy('news.created_at', 'desc')
    //     ->get();
    //     return view('news.all',compact('news'));
    // }

    public function create() {
        return view('news.create');
    }
    public  function edit($id)
    {
        $news = DB::table('news')->where('id', $id)->first();
        if (auth()->user() &&  ((auth()->user()->role == 'admin') || ((auth()->user()->role == 'hero') && auth()->user()->id == $news->user_id))) {
            return  view("news.edit", compact('news'));
        } else {
            return view('errors.error404');
        }
    }

    public function store(Request $request) {
        $data= $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png,jfif,svg|max:2048'
        ]);

        $image = $request->file('image');
        $imageName= uniqid().$image->getClientOriginalName();
        $image->move(public_path('assets/images/news'),$imageName);

        $news = new News();
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->image = $imageName;
        $news->user_id = auth()->user()->id;
        $news->save();

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

    public  function update(Request $request,$id) {
        $news = DB::table('news')->where('id', $id)->first();
        if (auth()->user() &&  ((auth()->user()->role == 'admin') || (auth()->user()->role == 'hero' && auth()->user()->id == $news->user_id))) {
            $request->validate([
                'title' => 'required|string',
                'content' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,jfif,svg|max:2048'
            ]);

            $image = $request->file('image');
            $imageName = uniqid() . $image->getClientOriginalName();
            $image->move(public_path('assets/images/news'), $imageName);

            DB::table('news')->where('id', $id)->update([
                "title" => $request->title,
                "content" => $request->content,
                "image" => $imageName,
                
            ]);

            return redirect()->route('news.show', $id)->with('success', 'News updated successfully.');
        } else {
            return view('errors.error404');
        }
    }

    public function show(int $id) {
        $news = News::find($id);
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
        DB::table('news')->where('id', $id)->delete();
        $userRole = auth()->user()->role;
        switch ($userRole) {
            case auth()->user()->role == 'admin':
                return redirect()->route('news.all')->with('success', "Chosen news deleted successfully");
                break;

            case auth()->user()->role == 'hero':
                return redirect()->route('news.index')->with('success', "Your news deleted successfullyy");
                break;

            default:
                return view('errors.error404');

        }



    }
}
