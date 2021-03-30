<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentsController;
use App\Http\Controllers\Admin\DropzoneController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\User\PermissionController as UserPermissionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    // var_dump(Auth::user());
    // return Auth::user();
    // Auth::logout();
    return view('panel.index') ;
})->middleware('auth.admin');

Route::post('/logout', function () {
    Auth::logout();
        session()->forget('admin');
        alert()->success('با موفقیت خارج شدید', 'موفقیت');
        
        return redirect('/');
    // return session()->all();
    // return view('panel.index') ;
})->name('logoutAdmin');
Route::post('attribute/values', [AttributeController::class , 'getvalues'] )->name('test')->middleware('auth.admin');

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

Route::get('/dropzone', [DropzoneController::class , 'index'] )->name('dropzone.index');
Route::post('dropzone/upload', [DropzoneController::class , 'upload'] )->name('dropzone.upload');
Route::get('dropzone/fetch', [DropzoneController::class , 'fetch'])->name('dropzone.fetch');
Route::get('dropzone/delete', [DropzoneController::class , 'delete'])->name('dropzone.delete');
