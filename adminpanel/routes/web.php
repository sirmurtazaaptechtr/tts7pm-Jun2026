<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [ViewController::class,'Index'])->name('index');

// Route::get('/table', [ViewController::class,'ShowTable'])->name('table');

// Route::get('/form', [ViewController::class,'ShowForm'])->name('form');

Route::controller(ViewController::class)->group(function () {
    
    Route::get('/', 'Index')->name('index');
    
    Route::get('/table','ShowTable')->name('table');
    
    Route::get('/form','ShowForm')->name('form');

});