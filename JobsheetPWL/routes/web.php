<?php

// use App\Http\Controllers\PageController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;
// use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/greeting', [WelcomeController::class, 'greeting']);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);

// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

// Route::get('/greeting', function () {
// 	return view('hello', ['name' => 'Fadhil Taufiqurrachman']);
// });

// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Fadhil Taufiqurrachman']);
// });

// Route::resource('photos', PhotoController::class);

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'about']);

// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::get('/world', function () {
//    return 'World';
// });

// Route::get('/hello', function () {
//    return 'Hello World';
// });