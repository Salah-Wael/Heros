<?php

use App\Http\Controllers\AuthController;
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
Route::get('/',function(){
    return view ('home');
});

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

Route::controller(PaypalController::class)->group(function(){
    Route::get('/payment', 'Deposit')->name('deposit');
    Route::get('/cancel', 'cancelDeposit')->name('deposit.cancel');
Route::get('/payment/sucess', 'sucessDeposit')->name('deposit.sucess');
});
