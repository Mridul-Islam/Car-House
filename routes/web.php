<?php

use App\Http\Controllers\AdminBrandsController;
use App\Http\Controllers\AdminCarsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/car/{car}', [HomeController::class, 'car_detail'])->name('carDetail');
Route::get('/brand/{brand}/cars', [HomeController::class, 'brand_cars'])->name('brand.cars');


Route::group(['middleware'=> 'auth'], function (){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');

    Route::post('/add_cart/{car}', [CartController::class, 'add_to_cart'])->name('add_cart');
    Route::get('/cart_list/{user}', [CartController::class, 'cart_list'])->name('cart_list');
    Route::delete('/cart_delete/{id}', [CartController::class, 'cart_delete'])->name('cart_delete');

    Route::post('/add_order/{car}', [OrderController::class, 'add_order'])->name('add_order');

    Route::resource('/admin/users', AdminUsersController::class);
    Route::resource('/admin/brands', AdminBrandsController::class);
    Route::resource('/admin/cars', AdminCarsController::class);
});
