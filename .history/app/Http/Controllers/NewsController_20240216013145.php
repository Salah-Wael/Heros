<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public  function index() {
        $news = DB::table('news')->get();
        // return $news;
        return view('news.index',compact('news'));
    }
    public  function create() {
        return view('/news.create');
    }
    public  function store(Request $request) {
        $data = $request->validate([
        'title' => 'required|string',
        'content' => 'required|string',
        'image' => '|string|max:2048',//mimes:jpeg,png,jfif,jpg,gif,svg
        ]);

        DB::table('news')->insert([
        'title'=>$request->title,
        'content'=>$request->input('content'),
        'image'=>$request->input('image'),
        'user_id'=>auth()->user()->id
        ]);
        return redirect('/news')->with('success','News created successfully.');
    }
    public  function show() {

    }
    public  function edit() {

    }
    public  function update() {

    }
    public  function destroy() {

    }
}
