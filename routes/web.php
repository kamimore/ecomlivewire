<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('dashboard',[DashBoardController::class, 'index'])->name('dashboard');
    Route::get('category',[CategoryController::class,'index'])->name('category');
    Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('category',[CategoryController::class,'store'])->name('category.store');

});