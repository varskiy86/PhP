<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function getAll($order = 'created_at') 
    {
        $posts = Posts::orderBy($order)->get();

        dd($posts);
    }
    public function getOne($id)
    {
        $posts = Posts::orderBy('created_at')->get();
        dd($posts);
    }
    public function newPost(Request $request)
    {
            $title = $request->input('title');
            $name = $request->input('name');
            $desc = $request->input('desc');
            $likes = $request->input('likes');
            $text = $request->input('text');
            $date = $request->input('date');
    
    $posts = Posts::all();

    $posts = new Posts;
    $posts->title = $title;
    $posts->desc = $desc;
    $posts->likes = $likes;
    $posts->text = $text;
    $posts->date = $date;
    $posts->name = $name;
    $posts->save();
    return view('test', [
        'var1' => $name,
        'var2' => $desc,
        'var3' => $likes,
        'var4' => $text,
        'var5' => $date,
    ]);
    }
    public function rework()
    {
        $posts = Posts::find(1);
        $posts->title = 'Новый заголовок записи с id 1';
        $posts->desc = "Новое описание записи с id 1";
        $posts->save();
        echo 'новый title';
    }

    public function editPost(Request $request, $id)
    {
            
    return view('editPost');
    }
}
