<?php
namespace App\Http\Controllers;

class User extends Controller{
    public function show(){
        return view('post.zadanie5', [
            'title' => 'hello'
        ]);
    }

    public function local(){
        return view('post.local',[
            'title' => 'local',
            'text' => 'local - text'
        ]);
    }

    public function global(){
        return view('post.global',[
            'title' => 'global',
            'text' => 'global - text'
        ]);
    }
}
?>