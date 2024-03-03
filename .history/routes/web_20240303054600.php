<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PaypalController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::controller(AuthController::class)->group(function(){
    Route::get('/login','showLogin');
    Route::post('/login','login');

    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');

    Route::post('/logout','logout');
});

Route::get('/admin', function () {
if(auth()->user()->role == 'admin'){
    return view('admin.home');
}else{
    return view('errors.error404');
}
})->name('admin');

Route::controller(HeroController::class)->group(function{

})
Route::get('/hero', function () {
if(auth()->user()->role == 'hero'){
    return view('hero.home');
}else{
    return view('errors.error404');
}
})->name('hero');

Route::get('/',function(){
return view ('home');
});

Route::get('support',function(){
    return  view ('support');
})->name('support');

Route::get('about',function(){
    return  view ('about');
})->name('about');

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
    Route::get('/news/{id}/edit', 'edit')->name('news.edit');
    Route::put('/news/{id}', 'update')->name('news.update');
    Route::delete('/news/{id}/delete', 'delete')->name('news.delete');
});












Route::get('/test', function () {
    return view('test.index');
});
Route::get('/chat', function () {
    return view('test.chat');
});
Route::get('/profile-edit', function () {
    return view('test.profile-edit');
});
Route::get('/profile', function () {
    return view('test.profile');
});
