<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Models\Products;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProductsController::class,'index']);

Route::resource('brand',BrandsController::class);
Route::resource('product',ProductsController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $product = Products::latest()->with('brands')->paginate(10);
    return view('dashboard',compact('product'))->with('i', (request()->input('page', 1) -1) *10);
})->name('dashboard');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
