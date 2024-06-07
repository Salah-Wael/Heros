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


Route::controller(AuthController::class)->group(function () {
    Route::post('/auth/login', 'login');
    Route::post('/auth/register', 'register');
});

Route::group([ 'middleware' => ['auth:sanctum'] ] ,function(){
    Route::controller(NewsController::class)->group(function () {
        Route::get('/news', 'index');
        Route::get('/news/create', 'create')->name('news.create');
        Route::post('/news/store', 'store')->name('news.store');
        Route::get('/news/{id}', 'show')->name('news.show');
        Route::get('/news/{news}/edit', 'edit')->name('news.edit');
        Route::put('/news/{id}', 'update')->name('news.update');
        Route::delete('/news/{id}/delete', 'delete')->name('news.delete');
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