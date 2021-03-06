<?php

use App\Http\Controllers\Admin\UserController;

Route::get('/', function () {
    return view('panel.index') ;
});

Route::resource('users', UserController::class );