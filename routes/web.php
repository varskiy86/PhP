<?php

use Illuminate\Support\Facades\Route;

Route::get('/tests', function () {
    return 'tests';
});

Route::get('/dir/tests', function () {
    return 'dir/tests';
});

Route::get('/user/{name}', function ($name) {
    return 'user/ ' . $name;
});

Route::get('/user/{surname}/{name}', function ($surname,$name) {
    return 'user/ ' . $surname .' '. $name;
});

Route::get('/city/{city?}', function ($city = 'omsk') {
    return $city;
});

Route::get('/user/{id}', function($id = '1')
{
    return $id;
});

Route::get('/user/{id}/{name}', function($id = '1', $name)
{
    return $id . $name;
})->where('{name}','[2]');

Route::get('/posts/{date}', function($date)
{
    return $date;
})->where('date', '[0-9]{4}\-[0-9]{2}\-[0-9]{2}');

Route::get('/{year}/{month}/{day}', function($year,$month,$day)
{
    return $year. '-' . $month . '-' . $day;
})-> where('year', '[0-9]{4}') -> where('month', '[0-9]{2}') -> where('day', '[0-9]{2}');

Route::get('/users/{order}', function ($order) {
    return "Order: " . $order;
})->where('order', 'name|surname|age');

Route::get('/city/{name}', function ($name) {
    return "city: " . $name;
})->where('name', '[a-zA-Z]+');

Route::get('/user/{name}', function ($name) {
    return "User: " . $name;
});
?>