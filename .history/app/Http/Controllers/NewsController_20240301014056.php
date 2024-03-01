<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class NewsController extends Controller
{
    public function index() {
        $news= DB::table('news')->orderBy('created_at', 'desc')->get();
        return view('news.index',compact('news'));
    }
    public function allNews() {
        $news= DB::table('news')->orderBy('created_at', 'desc')->get();
        return view('news.all',compact('news'));
    }

    public function create() {
        return view('news.create');
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


        // DB::table('news')->insert([
        //     'title'=>$request->title,
        //     'content'=>$request->input('content'),



        //     'image'=>$request->input('image'),
        //     'user_id'=>auth()->user()->id
        // ]);


        // $data["user_id"]=auth()->user()->id;
        // $news = News::create($data);

        return redirect('/news')->with('success','News created successfully.');
    }

    public function show(int $id) {
        $news = News::find($id);
        return view('news.show',compact('news'));
    }

    public  function edit($id) {
        $news = DB::table('news')->where('id',$id)->first();
        // return $news;
        return  view("news.edit", compact('news'));
    }

    public  function update(Request $request,$id) {
        $news= DB::table('news')->where('id',$id)->update([
            "title"=>$request->title,
            "content"=>$request->content,
            "image"=>$request->image
        ]);
        
        return redirect("/news/".$id."/show")->with('success','News updated successfully.');
    }

    public  function delete($id) {
        DB::table('news')->where('id',$id)->delete();

        $userRole = auth()->user()->role;
        switch ($userRole) {
            case auth()->user()->role == 'admin':
                return redirect()->route('news.index')->with('success', "News deleted Successfully");
                break;

            case auth()->user()->role == 'hero':
                return redirect()->route('news.index')->with('success', "News deleted Successfully");
                break;

            default:
                return route(return redirect()->route('news.index')->with('success', "News deleted Successfully");)
        }


        
    }
}
