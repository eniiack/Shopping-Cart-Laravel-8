<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Mail\SendMail;
use App\Models\User;
use App\Notifications\ActiveCode;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Rules\recaptcha;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class , 'index'] );


// All Routes Of Auth /////////////////////////////////////////



Route::get('/register' , [CustomAuthController::class , 'register']);

Route::get('/register/{id}', function ($id) {
   $article = User::find($id);
   return $article;
});
Route::post('/register', [CustomAuthController::class , 'register_form'])->name('register')->middleware('loginMiddelware');
Route::get('/login', [CustomAuthController::class , 'login'] )->middleware('loginMiddelware');
Route::post('/login', [CustomAuthController::class , 'login_form'] )->name('login')->middleware('loginMiddelware');
Route::post('/logout' , [CustomAuthController::class , 'logout'] )->name('logout');
Route::get('/recovery_password', [CustomAuthController::class , 'recovery'] )->name('recovery');
Route::post('/recovery_password', [CustomAuthController::class , 'recover_password'] )->name('recovery');
