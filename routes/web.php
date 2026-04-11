<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\GuestBookController;

Route::get('/show', [FlightController::class,'show']);
Route::get('/post/all/{order?}', [PostsController::class,'getAll']);
Route::get('/post/new', [PostsController::class,'newPost']);
Route::post('/post/new', [PostsController::class,'newPost']);
Route::get('/post/rework', [PostsController::class,'rework']);
Route::match(['get','Db'], '/post/edit', [DbController::class,'Db']);
Route::get('/guestbook', [GuestBookController::class,'index'])->name('guestbook.index');
Route::post('/guestbook', [GuestBookController::class,'store'])->name('guestbook.store');