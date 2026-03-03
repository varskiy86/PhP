<?php
use App\Http\Controllers\Controller1;
use Illuminate\Support\Facades\Route;

Route::get('/user', [Controller1::class,'show']);
?>