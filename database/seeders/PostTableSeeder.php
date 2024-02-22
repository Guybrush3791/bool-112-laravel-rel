<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post :: factory()
            -> count(100)
            -> make()
            -> each(function($post) {

            $user = User :: inRandomOrder() -> first();
            $post -> user() -> associate($user);

            $post -> save();
        });
    }
}
