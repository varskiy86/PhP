<?php
namespace App\Http\Controllers;

class Controller1 extends Controller
{
    public function hello(){
        return view('post.hello', [
            'title' => 'page title',
            'text' => 'page content',
            ]);
    }

    public function show(){
        return 'text - "Hello"';
    }

    public function kaif(){
        return view('post.zadanie',[
            'title' => 'google.com',
            'name'=> 'Николай',
            'surname' => 'Фёдорович'
        ]);
    }
}
?>
