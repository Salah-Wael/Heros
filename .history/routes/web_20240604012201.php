<?php

use App\Models\Hero;
use App\Livewire\Users;
use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SocialiteController;

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

    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');

    Route::get('/register-hero', 'showRegisterHero')->name('hero.register');
    Route::post('/register-hero', 'registerHero');

    Route::get('/forgot-password', 'showForgotPassword')->name('forgot-Password');
    Route::post('/forgot-password', 'forgotPassword');

    Route::post('/logout','logout')->name('logout')->middleware('auth');
});

Route::controller(SocialiteController::class)->group(function () {
    Route::get('/google-login', 'googleLogin')->name('google.login');
    Route::get('/google-redirect', 'googleRedirect')->name('google.redirect');
});
Route::controller(SocialiteController::class)->group(function () {
    Route::get('/set-password', 'socialiteSetPassword')->name('socialite.set-password');
    Route::post('/set-password', 'setPassword');

    Route::get('/twitter-login', 'twitterLogin')->name('twitter.login');
    Route::get('/twitter-redirect', 'twitterRedirect')->name('twitter.redirect');
});

Route::get('/admin', function () {
if(auth()->user() && auth()->user()->role == 'admin'){
    return view('admin.home');
}else{
    return view('errors.error404');
}
})->name('admin')->middleware(['auth']);

Route::controller(HeroController::class)->group(function(){
    Route::get('/hero','heroHome')->name('hero');
    Route::get('/profile/{id}', 'heroProfile')->name('hero-profile');
    Route::get('/profile/{id}/edit', 'editHeroProfile')->name('edit-hero-profile');
});

Route::get('/dashboard',function(){
return view ('home');
})->name('user');

Route::get('/',function(){
return view ('home');
});

Route::get('about',function(){
    return  view ('about');
})->middleware('auth')->name('about');

Route::get('terms',function(){
    return  view ('terms.terms');
})->name('terms');

Route::get('privacy-policy',function(){
    return  view ('terms.privacy-policy');
})->name('privacy-policy');
Route::controller(NewsController::class)->group(function(){
    Route::get('/news', 'index')->name('news.index');
    Route::get('/news/create', 'create')->name('news.create');
    Route::post('/news/store', 'store')->name('news.store');
    Route::get('/news/{id}', 'show')->name('news.show');
    Route::get('/news/{news}/edit', 'edit')->name('news.edit');
    Route::put('/news/{id}', 'update')->name('news.update');
    Route::delete('/news/{id}/delete', 'delete')->name('news.delete');
});

// Route::get('/test', function () {
//     return view('test.index');
// });

Route::middleware('auth')->group(function () {
    Route::get('/chat', [Index::class,'render'])->name('chat.index');
    Route::get('/chat/{query}', [Chat::class, 'render'])->name('chat');
    Route::get('/chat/users', [Users::class, 'render'])->name('chat.users');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('/heros_request', 'herosRequest')->name('heros.show_requests');
    Route::get('/heros_request/archived', 'archivedHerosRequest')->name('heros.show_archived_requests');
    Route::delete('/heros_request/{id}/delete', 'deleteHeroRequest')->name('heros.archive_request');
    Route::delete('/heros_request/{id}/force_delete', 'forceDeleteHeroRequest')->name('heros.force_delete_request');
    Route::get('/heros_request/{id}/unArchived', 'resotreHeroRequest')->name('heros.resotre_request');
    Route::get('/heros_request/{id}/accept', 'insertIntoHerosTable')->name('heros.accept_request');
});

Route::controller(PaypalController::class)->group(function(){
    Route::get('/payment', 'payment')->name('payment');
    Route::get('/cancel', 'cancel')->name('payment.cancel');
    Route::get('/support/success', 'success')->name('payment.success');
});
Route::controller(StripeController::class)->group(function () {
    Route::post('support', 'pay')->name('stripe.pay');
    Route::get('support', 'stripe')->middleware('auth')->name('support');
    Route::get('/success', 'success')->name('success');
});
// Route::get('support',function(){
    //     return  view ('support');
    // })->middleware('auth')->name('support');

