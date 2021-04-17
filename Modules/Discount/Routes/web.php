<?php

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

use Modules\Discount\Http\Controllers\Frontend\DiscountController as FrontendDiscountController;

Route::prefix('discount')->group(function() {
    Route::post('/check', [FrontendDiscountController::class , 'check'])->name('cart.discount.check');
    Route::delete('/delete', [FrontendDiscountController::class , 'destroy']);
// Route::get('/shop/{category}', [Frontend\DiscountControlle::class , 'check'])->name("shop");

});
// Route::prefix('discount')->group(function() {
//     Route::post('discount/check', 'Frontend\DiscountController@check')->name('cart.discount.check');
// });