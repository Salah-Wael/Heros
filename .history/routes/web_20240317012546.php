<?php

use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PaypalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){
    Route::get('/login','showLogin')->name('login');
    Route::post('/login','login');

    Route::get('/forgot-password', 'showForgotPassword')->name('forgot-Password');
    Route::post('/login','login');

    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');

    Route::get('/register-hero', 'showRegisterHero');
    Route::post('/register-hero', 'registerHero');

    Route::post('/logout','logout');
});

Route::get('/admin', function () {
if(auth()->user()->role == 'admin'){
    return view('admin.home');
}else{
    return view('errors.error404');
}
})->name('admin');

Route::controller(HeroController::class)->group(function(){
    Route::get('/hero','heroHome')->name('hero');
    Route::get('/profile/{id}', 'heroProfile')->name('hero-profile');
    Route::get('/profile/{id}/edit', 'editHeroProfile')->name('edit-hero-profile');
});

Route::get('/',function(){
return view ('home');
})->middleware('auth')->name('user');

Route::get('support',function(){
    return  view ('support');
})->middleware('auth')->name('support');

Route::get('about',function(){
    return  view ('about');
})->middleware('auth')->name('about');

Route::controller(PaypalController::class)->group(function(){
    Route::get('/payment', 'payment')->name('payment');
    Route::get('/cancel', 'cancel')->name('payment.cancel');
    Route::get('/support/success', 'success')->name('payment.success');
});

Route::controller(NewsController::class)->group(function(){
    Route::get('/news', 'index')->name('news.index');
    Route::get('/news/all', 'index')->name('news.all');
    Route::get('/news/create', 'create')->name('news.create');
    Route::post('/news/store', 'store')->name('news.store');
    Route::get('/news/{id}', 'show')->name('news.show');
    Route::get('/news/{news}/edit', 'edit')->name('news.edit');
    Route::put('/news/{id}', 'update')->name('news.update');
    Route::delete('/news/{id}/delete', 'delete')->name('news.delete');
});

Route::get('/test', function () {
    return view('test.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/chat', [Index::class,'render'])->name('chat.index');
    Route::get('/chat/{query}', [Chat::class, 'render'])->name('chat');
    Route::get('/chat/users', [Users::class, 'render'])->name('chat.users');
});
