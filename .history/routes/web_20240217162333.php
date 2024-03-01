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


Route::get('about',function(){
    return  view ('about');

});





Route::controller(AuthController::class)->group(function(){
    Route::get('/login','showLogin');
    Route::post('/login','login');

    Route::get('/register', 'showRegister');
    Route::post('/register', 'register');

    Route::post('/logout','logout');
});

Route::get('/',function(){
    return view ('home');
});

Route::controller(PaypalController::class)->group(function(){
    Route::get('/payment', 'payment')->name('payment');
    Route::get('/cancel', 'cancel')->name('payment.cancel');
    Route::get('/support/success', 'success')->name('payment.success');
});

Route::get('support',function(){
    return  view ('support');

});

Route::controller(NewsController::class)->group(function(){
    Route::get('/news','index')->name('news.index');
    Route::post('/news/create','create')->name('news.create');
    Route::get('/news/create','create');
    Route::post('/news/store','store')->name('news.store');
    Route::get('/news/{id}','show')->name('news.show');
    Route::get('/news/{id}/edit','edit')->name('news.edit');
    Route::put('/news/{id}','update')->name('news.update');
    Route::delete('/news/{id}','destroy')->name('news.destroy');
});

Route::get('/admin', function () {
return view('admin.home');
})->name('admin');

Route::get('/test',)
