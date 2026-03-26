<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */

    public function run()
    {
        DB::table('post')->insert([
            'title'=>'title 1',
            'slug'=>'post-1',
            'text'=>'text text text 1',
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            ]),
        ]);
    }
}
