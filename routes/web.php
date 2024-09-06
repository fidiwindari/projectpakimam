<?php

use App\Http\Controllers\UsersController;
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
    return view('welcome');
});
Route::post('/auth', [UsersController::class,'auth']);

Route::get('/user', [UsersController::class,'user']);
Route::get('/user/show/{id}',[UsersController::class, 'show'])->name ('user.show');
Route::get('/user/cekout',[UsersController::class, 'cekout']);
Route::get('/keranjang',[UsersController::class, 'keranjang']);
Route::get('/checkout',[UsersController::class, 'checkout']);
