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

Route::prefix('/test')->group(function () {
    Route::get('/page/{val}/chapter/{vol?}', function ($val, $vol = null) {
        $name = "Ali Raza";
        $age = 21;
        return view('test', ['number' => $val, 'chapter' => $vol, 'name' => $name, 'age' => $age]);
    })->whereNumber('val');

    Route::get('/page', function () {
        return "<h1>This is a test Page</p>";
    });

    Route::redirect('/','/page', 301);
});

Route::get('/page', function () {
    $students = ['Mohammad', 'Hamza', 'Shahwaiz', 'Mohib', 'Khzeena', 'Maria', 'Yasir', 'Muqaddar', 'Mustafa', 'Abdul Hadi', 'Ali Hassan'];
    // $students = [];
    return view('page',['students' => $students]);
});

Route::fallback(function () {
    return "<h1>Page not found</h1>";
});


