<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'registered_user_create',
            ],
            [
                'id'    => 18,
                'title' => 'registered_user_edit',
            ],
            [
                'id'    => 19,
                'title' => 'registered_user_show',
            ],
            [
                'id'    => 20,
                'title' => 'registered_user_delete',
            ],
            [
                'id'    => 21,
                'title' => 'registered_user_access',
            ],
            [
                'id'    => 22,
                'title' => 'contact_us_create',
            ],
            [
                'id'    => 23,
                'title' => 'contact_us_edit',
            ],
            [
                'id'    => 24,
                'title' => 'contact_us_show',
            ],
            [
                'id'    => 25,
                'title' => 'contact_us_delete',
            ],
            [
                'id'    => 26,
                'title' => 'contact_us_access',
            ],
            [
                'id'    => 27,
                'title' => 'what_we_do_create',
            ],
            [
                'id'    => 28,
                'title' => 'what_we_do_edit',
            ],
            [
                'id'    => 29,
                'title' => 'what_we_do_show',
            ],
            [
                'id'    => 30,
                'title' => 'what_we_do_delete',
            ],
            [
                'id'    => 31,
                'title' => 'what_we_do_access',
            ],
            [
                'id'    => 32,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
