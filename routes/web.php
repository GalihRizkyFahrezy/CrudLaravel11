<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[BeritaController::class,'index'])->name('index')->name('index'); 
Route::get('/dashboard',[BeritaController::class,'dashboard'])->name('dashboard');
Route::get('/create',[BeritaController::class,'create'])->name('create');

Route::post('formcreate',[BeritaController::class,'formcreate'])->name('formcreate');

Route::get('/delete/{id}',[BeritaController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[BeritaController::class,'edit'])->name('edit');
Route::post('/formedit/{id}',[BeritaController::class,'formedit'])->name('formedit');
Route::get('/viewberita/{id}',[BeritaController::class,'viewberita'])->name('viewberita');