<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;

Route::get('/show', [FlightController::class,'show']);
Route::get('/post/all/{order?}', [PostsController::class,'getAll']);
Route::get('/post/new', [PostsController::class,'newPost']);
Route::post('/post/new', [PostsController::class,'newPost']);
Route::get('/post/rework', [PostsController::class,'rework']);






Route::match(['get','Db'], '/post/edit', [DbController::class,'Db']);