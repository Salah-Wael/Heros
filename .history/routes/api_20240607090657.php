<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Api\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [AuthController::class, 'showRegister']);
Route::controller(AuthController::class)->group(function () {
    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');
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


// Route::group([
//         'prefix' => 'v1',
//         'namespace' => 'App\Http\Controllers\API'
//     ],
//     function(){
//         Route::post('/auth/login', 'AuthController@login');
//         Route::post('/auth/register', 'AuthController@register');

//     //     Route::group([ 'middleware' => ['auth:sanctum'] ] ,function(){
            
//     //     });
//     }
// );