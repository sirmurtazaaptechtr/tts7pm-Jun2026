<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ViewController::class,'ShowDashboard'])->name('index');

Route::get('/table', [ViewController::class, 'ShowTable'])->name('table');

Route::get('/form', [ViewController::class, 'ShowForm'])->name('form');
