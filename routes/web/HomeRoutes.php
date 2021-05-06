<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Middleware\Localization;
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
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

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
// Route::get('lang/{lang}', function ($lang) {
//         App::setlocale($lang);
//         return view('home');
//     });

Route::get('/', [HomeController::class , 'index']);
Route::get('/home', [HomeController::class , 'home']);
Route::get('/cart', [HomeController::class , 'cart']);
Route::get('/shop/{category}', [HomeController::class , 'shop'])->name("shop");
Route::get('/shop', [HomeController::class , 'shoping'])->name("shoping");
Route::get('/product/{product}', [HomeController::class , 'product'])->name('show_product');
Route::post('/product', [HomeController::class , 'comment'])->name('send_comment');
Route::post('/payment', [HomeController::class , 'payment'])->name('cart.payment')->middleware('auth');
Route::get('/payment/callback', [HomeController::class , 'callback'])->name('payment.callback');
Route::get('/search/{text}', [HomeController::class , 'searchProduct'])->name('search.product');

Route::get('lang/{lang}', [LocalizationController::class , 'index']);
        Route::get('lang/change', [LocalizationController::class , 'change'])->name('changeLang');
// All Routes Of Auth /////////////////////////////////////////



Route::get('/register' , [CustomAuthController::class , 'register']);
// Route::post('/ProductItem' , [CustomAuthController::class , 'Productitem']);

Route::get('/register/{id}', function ($id) {
   $article = User::find($id);
   return $article;
});

Route::post('/register', [CustomAuthController::class , 'register_form'])->name('register');
Route::get('/login', [CustomAuthController::class , 'login'] );
Route::post('/login', [CustomAuthController::class , 'login_form'] )->name('login');
Route::post('/logout' , [CustomAuthController::class , 'logout'] )->name('logout');
// Route::get('/recovery_password', [CustomAuthController::class , 'recovery'] )->name('recovery');
Route::post('/recovery_password', [CustomAuthController::class , 'recover_password'] )->name('recovery');

// Route::get('downloads/file', function () {
//   return  Storage::download(request('path'));
// })->name('download.file')->middleware('signed');



Route::post('card/add', [CartController::class , 'addToCart'] )->name('cart.add');
Route::post('card/minus', [CartController::class , 'minus'] )->name('cart.minus');
Route::post('card/delete/{id}', [CartController::class , 'deleteFromCart'] )->name('cart.delete');


// search

Route::post('search/products', [HomeController::class , 'search'] )->name('search.products');
