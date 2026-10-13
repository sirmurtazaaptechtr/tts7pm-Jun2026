<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shop-single', function () {
    return view('shop-single');
});

Route::get('/test/page/{val}/chapter/{vol?}', function ($val, $vol = null) {
    $name = "Ali Raza";
    $age = 21;
    return view('test', ['number' => $val, 'chapter' => $vol, 'name' => $name, 'age' => $age]);
})->whereNumber('val');
