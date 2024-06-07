<?php

use App\Livewire\Users;

use App\Livewire\Chat\Chat;
use App\Livewire\Chat\Index;
use Illuminate\Http\Request;
use App\Livewire\Chat\ChatBox;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\HeroController;
use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\PaypalController;
use App\Http\Controllers\Api\StripeController;
use App\Http\Controllers\Api\SocialiteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin');
    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');

    Route::get('/register-hero', 'showRegisterHero');
    Route::post('/auth/hero/register', 'registerHero');

    Route::post('/logout', 'logout');

    Route::get('/forgot-password', 'showForgotPassword');
    Route::post('/forgot-password', 'forgotPassword');
});

Route::group([ 'middleware' => ['auth:sanctum'] ] ,function(){

    Route::controller(NewsController::class)->group(function () {
        Route::get('/news', 'index');
        Route::get('/news/create', 'create');
        Route::post('/news/store', 'store');
        Route::get('/news/{id}', 'show');
        Route::get('/news/{news}/edit', 'edit');
        Route::put('/news/{id}', 'update');
        Route::delete('/news/{id}/delete', 'delete');
    });

    Route::controller(PaypalController::class)->group(function () {
    Route::get('/payment', 'payment');
    Route::get('/cancel', 'cancel');
    Route::get('/support/success', 'success');
});
Route::controller(StripeController::class)->group(function () {
    Route::get('support', 'stripe');
    Route::post('support', 'pay');
    Route::get('/success', 'success');
});

});

Route::controller(HeroController::class)->group(function () {
    Route::get('/hero', 'heroHome')->name('hero');
    Route::get('/search-hero-profile', 'searchAboutHeroProfile')->name('search.hero');
    Route::get('/profile/{id}', 'heroProfile')->name('hero-profile');
    Route::get('/profile/{id}/edit', 'editHeroProfile')->name('edit-hero-profile');
});

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return  view('about');
});

Route::get('terms', function () {
    return  view('terms.terms');
})->name('terms');

Route::get('privacy-policy', function () {
    return  view('terms.privacy-policy');
});

Route::middleware('auth')->group(function () {
    Route::get('/chat', [Index::class, 'render'])->name('chat.index');
    Route::get('/chat/{query}', [Chat::class, 'render'])->name('chat');
    Route::post('/chat/{query}', [ChatBox::class, 'sendMessage']);
    Route::get('/chat/users', [Users::class, 'render'])->name('chat.users');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/heros_request', 'herosRequest');
    Route::get('/heros_request/archived', 'archivedHerosRequest');
    Route::delete('/heros_request/{id}/delete', 'deleteHeroRequest');
    Route::delete('/heros_request/{id}/force_delete', 'forceDeleteHeroRequest');
    Route::get('/heros_request/{id}/unArchived', 'resotreHeroRequest');
    Route::get('/heros_request/{id}/accept', 'insertIntoHerosTable');
});


// Route::get('support',function(){
    //     return  view ('support');
    // })->middleware('auth')->name('support');
