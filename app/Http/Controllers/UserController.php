<?php
namespace App\Http\Controllers;
	
class UserController  extends Controller
	{
		public function show()
		{
			return "hello world1";
		}
		public function all()
		{
			return "hello world2";
		}

			public function show2($id)
		{
			$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];

			
			return $users[$id];
		}
	}

	
    


	
