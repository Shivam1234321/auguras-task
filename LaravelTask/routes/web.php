<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return redirect('product');
});

// Resource method include all method for get all product get specific product and delete, edit etc.

Route::post('/product/store', [ProductController::class, 'store']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);
Route::resource('/product', ProductController::class);
