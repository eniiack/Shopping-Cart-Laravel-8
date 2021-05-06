<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Api\v1\BuyController;
use App\Http\Controllers\Api\v1\CommentController;
use App\Http\Controllers\Api\v1\ProductsController;
use App\Http\Controllers\Api\v1\UploadController;
use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('test', function () {
//     return "done";
// });

Route::prefix('v1')->group(function () {
    Route::get('/products', [ProductsController::class , 'index'] );
    Route::get('/product/{product}', [ProductsController::class , 'product'] );
    Route::get('/users', [ProductsController::class , 'users'] );
    Route::get('/user/{name}', [ProductsController::class , 'username'] );
    Route::post('/product/create', [ProductsController::class , 'store'] );



    Route::post('/login', [UserController::class , 'login'] );
    Route::post('/register', [UserController::class , 'register'] );


    Route::middleware('auth:api')->group(function(){
        Route::get('/user', function () {
            return auth()->user();
        });
        Route::post('/comment', [CommentController::class , 'store'] );


        Route::post('/upload/image', [UploadController::class , 'image'] );
        Route::post('/upload/file', [UploadController::class , 'file'] );


        Route::post('/product/by/{product}', [BuyController::class , 'buy'] );
    });
});
