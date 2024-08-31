<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Livewire\Shop;
use App\Livewire\ProductDetail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/shop', Shop::class)->name('shop');
Route::get('/shop/product/{id}', ProductDetail::class)->name('product.show');

Route::get('/', [HomeController::class, 'index']);