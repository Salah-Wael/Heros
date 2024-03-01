<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index() {
        $news = DB::table('news')->get();
        // return $news;
        return view('news.index',compact('news'));
    }
    public function create() {
        return view('news.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'image' => 'max:2048'//|mimes:jpeg,png,jfif,jpg,svg'
        ]);

        $image = $request->file('file');
        $imageName= $image->getClientOriginalName();
        $image->move(public_path('assets/images/news'),$imageName);

        $news= new News();
        $news->image=



        DB::table('news')->insert([
            'title'=>$request->title,
            'content'=>$request->input('content'),



            'image'=>$request->input('image'),
            'user_id'=>auth()->user()->id
        ]);


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
