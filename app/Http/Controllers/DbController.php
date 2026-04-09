<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; // подключаем фасад DB

class DbController extends Controller
{
	public function Db()
	{
		// $posts = DB::table('users')->get();

		// return view('post.Db', ['posts' => $posts]);
		
		// $posts = DB::table('users')->get();
		// foreach ($posts as $post) {
		// 	return view('post.Db', ['posts' => $posts]);
		// }

		$posts = DB::table('users')->where('id', '!=', 3)->get();
		return view('post.Db', ['posts' => $posts]);
	}
}
?>