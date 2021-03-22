<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\User\PermissionController as UserPermissionController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('panel.index') ;
})->middleware('auth.admin');

Route::resource('users', UserController::class )->middleware('auth.admin');
Route::resource('permissions', PermissionController::class )->middleware('auth.admin');
Route::resource('roles', RoleController::class )->middleware('auth.admin');


Route::get('/users/{user}/permissions', [UserPermissionController::class , 'create'] )->name('users.permissions')->middleware('auth.admin');
Route::post('/users/{user}/permissions', [UserPermissionController::class , 'store'] )->name('users.permissions.store')->middleware('auth.admin');
Route::get('/login', [LoginController::class , 'loginAdmin'] )->name('loginAdmin');
Route::post('/login', [LoginController::class , 'loginAdminPost'] )->name('loginAdminPost');

Route::resource('products', ProductController::class )->middleware('auth.admin');
Route::get('comments/unapproved' , [CommentsController::class])->name('comments.unapproveds');
Route::resource('comments', CommentsController::class )->only(['index' , 'update' , 'destroy']);


Route::resource('categories', CategoryController::class );

Route::post('attribute/values', [AttributeController::class , 'getvalues'] );
