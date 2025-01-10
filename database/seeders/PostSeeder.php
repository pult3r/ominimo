<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostSeeder extends Seeder
{
    public function run()
    {
        User::factory(5)->create()->each(function ($user) {
            Post::factory(10)->create(['user_id' => $user->id]);
        });
    }
}
