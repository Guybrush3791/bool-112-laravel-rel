<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\UserDetail;

class UserDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User :: all();
        $users -> each(function($user) {

            $userDetail = UserDetail :: factory() -> make();
            $userDetail -> user() -> associate($user);

            $userDetail -> save();
        });
    }
}
