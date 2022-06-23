<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Super Admin',
                'email'              => 'admin@jacobsladder.africa',
                'password'           => bcrypt('5l9x+c7s'),
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2022-06-23 07:37:16',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
