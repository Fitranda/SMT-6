<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});

Route::view('/register', 'register');
Route::post('/login', [UserController::class,'login']);
Route::post('/register', [UserController::class,'register']);
Route::post('/add_to_cart', [ProductController::class,'addToCart']);
Route::get('/', [ProductController::class,'index']);
Route::get('/detail/{id}', [ProductController::class,'details']);
Route::get('/cartList', [ProductController::class,'cartList']);
Route::get('/removecart/{id}', [ProductController::class,'remove']);
Route::get('/order', [ProductController::class,'order']);
Route::get('/myorder', [ProductController::class,'myorder']);
Route::post('/orderplace', [ProductController::class,'orderplace']);
