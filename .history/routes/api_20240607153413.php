<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/register-hero', [AuthController::class, 'showRegisterHero']);
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin']);
    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');

    Route::get('/register-hero', 'showRegisterHero');
    Route::post('/auth/hero/register', 'registerHero');
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
});

Route::get('/admin', function () {
    if (auth()->user() && auth()->user()->role == 'admin') {
        return view('admin.home');
    } else {
        return view('errors.error404');
    }
})->name('admin')->middleware(['auth']);

Route::controller(HeroController::class)->group(function () {
    Route::get('/hero', 'heroHome')->name('hero');
    Route::get('/search-hero-profile', 'searchAboutHeroProfile')->name('search.hero');
    Route::get('/profile/{id}', 'heroProfile')->name('hero-profile');
    Route::get('/profile/{id}/edit', 'editHeroProfile')->name('edit-hero-profile');
});

Route::get('/dashboard', function () {
    return view('home');
})->name('user');

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return  view('about');
})->middleware('auth')->name('about');

Route::get('terms', function () {
    return  view('terms.terms');
})->name('terms');

Route::get('privacy-policy', function () {
    return  view('terms.privacy-policy');
})->name('privacy-policy');
Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index');
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
    Route::get('/chat', [Index::class, 'render'])->name('chat.index');
    Route::get('/chat/{query}', [Chat::class, 'render'])->name('chat');
    Route::post('/chat/{query}', [ChatBox::class, 'sendMessage']);
    Route::get('/chat/users', [Users::class, 'render'])->name('chat.users');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/heros_request', 'herosRequest')->name('heros.show_requests');
    Route::get('/heros_request/archived', 'archivedHerosRequest')->name('heros.show_archived_requests');
    Route::delete('/heros_request/{id}/delete', 'deleteHeroRequest')->name('heros.archive_request');
    Route::delete('/heros_request/{id}/force_delete', 'forceDeleteHeroRequest')->name('heros.force_delete_request');
    Route::get('/heros_request/{id}/unArchived', 'resotreHeroRequest')->name('heros.resotre_request');
    Route::get('/heros_request/{id}/accept', 'insertIntoHerosTable')->name('heros.accept_request');
});

Route::controller(PaypalController::class)->group(function () {
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
