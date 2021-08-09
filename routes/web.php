<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'Home'])->name('homeIndex');
Route::get('/admin',function(){
    return view('admin.login');
})->name('login');
Route::get('/activity',[HomeController::class,'Activity'])->name('pagesActivity');
Route::get('/contact',[HomeController::class,'Contact'])->name('pagesContact');
Route::get('/history',[HomeController::class,'History'])->name('pagesHistory');
Route::get('/structure',[HomeController::class,'Structure'])->name('pagesStructure');
Route::get('/role',[HomeController::class,'Role'])->name('pagesRole');
Route::get('/whiteReport',[HomeController::class,'WhiteReport'])->name('pagesWhiteReport');
Route::get('/Strategy',[HomeController::class,'Strategy'])->name('pagesStrategy');
Route::get('/FuelPrice',[HomeController::class,'FuelPrice'])->name('pagesFuelPrice');
Route::get('/News',[HomeController::class,'News'])->name('pagesNews');
Route::get('/Statistic',[HomeController::class,'Statistic'])->name('pagesStatistic');
Route::get('/Legislation',[HomeController::class,'Legislation'])->name('pagesLegislation');
Route::get('/Order',[HomeController::class,'Order'])->name('pagesOrder');
Route::get('/Notice',[HomeController::class,'Notice'])->name('pagesNotice');

