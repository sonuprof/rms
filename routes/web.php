<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\LoginController;



Route::get('/', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'],'/loginuser',[LoginController::class,'loginuser'])->name('loginuser');

Route::middleware('checkSession')->group(function () {

// LoginController
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
// LoginController 

// MainController 
Route::get('/overview',[Maincontroller::class,'overview'])->name('overview');
Route::get('/plantdetail',[Maincontroller::class,'plantdetail'])->name('plantdetail');
Route::get('/edit',[Maincontroller::class,'edit'])->name('edit');
Route::post('/update',[Maincontroller::class,'update'])->name('update');
Route::get('/device',[Maincontroller::class,'device'])->name('device');
Route::get('/file-import',[Maincontroller::class,'importFile'])->name('file-import');
Route::post('/import',[Maincontroller::class,'import'])->name('import');
Route::get('/popup',[Maincontroller::class,'popup'])->name('popup');

// MainController 

   Route::get('/export', function () {
       return view('pages.export'); 
   })->name('export');


});
  




