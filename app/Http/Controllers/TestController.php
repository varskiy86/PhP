<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Test;

class TestController extends Controller
{
    public function form(Request $request)
    {
        $num = $request->input('number');
        $result = $num * $num;
        var_dump($result);  
        return view('testform');
    }
}
