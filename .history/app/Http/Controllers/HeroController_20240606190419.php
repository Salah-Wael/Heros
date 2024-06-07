<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function heroHome() {
    if(auth()->user()->role == 'hero'){
        return view('hero.home');
    }
    return view('errors.error404');
    }

    public function heroProfile($id) {
        auth()->user()->role == 'hero';
        return view('hero.profile');
    }
    public  function editHeroProfile($id) {
        return view('hero.profile-edit');
    }

    public function searchAboutHero(Request $){
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
    }
}
