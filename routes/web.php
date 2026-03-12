<?php
use App\Http\Controllers\Controller1;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::get('/user', [Controller1::class,'hello']);
Route::get('/users', [Controller1::class,'show']);
Route::get('/kaef', [Controller1::class,'kaif']);
Route::get('/k', [User::class,'show']);
Route::get('/loc', [User::class,'local']);
Route::get('/glob', [User::class,'global']);
?>