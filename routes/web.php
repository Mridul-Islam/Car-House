<?php

use App\Http\Controllers\AdminBrandsController;
use App\Http\Controllers\AdminCarsController;
use App\Http\Controllers\AdminUsersController;
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

Route::group(['middleware'=> 'auth'], function (){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');

    Route::resource('/admin/users', AdminUsersController::class);
    Route::resource('/admin/brands', AdminBrandsController::class);
    Route::resource('/admin/cars', AdminCarsController::class);
});
