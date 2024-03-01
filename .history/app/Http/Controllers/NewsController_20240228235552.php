<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {
        $news = DB::table('news')->orderBy('created_at', 'desc')->get();
        return view('news.index',compact('news'));
    }
    public function create() {
        return view('news.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'required|max:2048|mimes:jpeg,png,jfif,jpg,svg'
            'image' => 'required|image|mimes:jpeg,jpg,png,jfif,svg|max:2048'
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName= uniqid().$image->getClientOriginalName();//.'.'. $image->getClientOriginalExtension()
            $image->move(public_path('assets/images/news'),$imageName);

            $news = new News();
            $news->title = $data['title'];
            $news->content = $data['content'];
            $news->image = $imageName;
            $news->user_id = auth()->user()->id;
            $news->save();
        }
        else{
            echo('error');
        }


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
    public  function edit() {

    }
    public  function update() {

    }
    public  function destroy() {

    }
}
