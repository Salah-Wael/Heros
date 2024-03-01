<?php

use App\Http\Controllers\AuthController;
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
});
Route::get('/',function(){
    return view ('home');
});

Route::get('about',function(){
    return  view ('about');

});
