<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\User\PermissionController as UserPermissionController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('panel.index') ;
});

Route::resource('users', UserController::class );
Route::resource('permissions', PermissionController::class );
Route::resource('roles', RoleController::class );


Route::get('/users/{user}/permissions', [UserPermissionController::class , 'create'] )->name('users.permissions');
Route::post('/users/{user}/permissions', [UserPermissionController::class , 'store'] )->name('users.permissions.store');