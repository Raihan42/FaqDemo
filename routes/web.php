<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/shop',[\App\Http\Controllers\ShopController::class, 'ShopInfo'])
->middleware(['verify.shopify'])->name('shop');

Route::get('/collections',[\App\Http\Controllers\CollectionController::class, 'AllCollectionView'])
->middleware(['verify.shopify'])->name('collections.view');

Route::post('/collections',[\App\Http\Controllers\CollectionController::class, 'AllCollectionStore'])
->middleware(['verify.shopify'])->name('collections.store');