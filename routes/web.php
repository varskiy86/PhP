<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\GuestBookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdController;
use App\Http\Controllers\LocationController;

Route::get('/show', [FlightController::class, 'show']);

Route::get('/post/all/{order?}', [PostsController::class, 'getAll']);
Route::get('/post/new', [PostsController::class, 'newPost']);
Route::post('/post/new', [PostsController::class, 'newPost']);
Route::get('/post/rework', [PostsController::class, 'rework']);
Route::match(['get', 'Db'], '/post/edit', [DbController::class, 'Db']);
Route::get('/guestbook', [GuestBookController::class, 'index'])->name('guestbook.index');
Route::post('/guestbook', [GuestBookController::class, 'store'])->name('guestbook.store');
Route::get('/categoriesIndex', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/category', [CategoryController::class, 'show'])->name('categories.show');
Route::post('/categories/category1/ads', [AdController::class, 'store'])->name('ads.store');
// Роуты для стран
Route::resource('countries', CountryController::class);

// Роуты для городов
Route::resource('cities', CityController::class);

// Роуты для достопримечательностей
Route::resource('attractions', AttractionController::class);