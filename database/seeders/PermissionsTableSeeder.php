<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [
            [
                'id'    => 1,
                'name' => 'user_management_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 2,
                'name' => 'permission_create',
                'guard_name' => 'web',
            ],
            [
                'id'    => 3,
                'name' => 'permission_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 4,
                'name' => 'permission_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 5,
                'name' => 'permission_delete',
                'guard_name' => 'web',
            ],
            [
                'id'    => 6,
                'name' => 'permission_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 7,
                'name' => 'role_create',
                'guard_name' => 'web',
            ],
            [
                'id'    => 8,
                'name' => 'role_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 9,
                'name' => 'role_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 10,
                'name' => 'role_delete',
                'guard_name' => 'web',
            ],
            [
                'id'    => 11,
                'name' => 'role_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 12,
                'name' => 'user_create',
                'guard_name' => 'web',
            ],
            [
                'id'    => 13,
                'name' => 'user_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 14,
                'name' => 'user_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 15,
                'name' => 'user_delete',
                'guard_name' => 'web',
            ],
            [
                'id'    => 16,
                'name' => 'user_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 17,
                'name' => 'product_management_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 18,
                'name' => 'product_category_create',
                'guard_name' => 'web',
            ],
            [
                'id'    => 19,
                'name' => 'product_category_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 20,
                'name' => 'product_category_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 21,
                'name' => 'product_category_delete',
                'guard_name' => 'web',
            ],
            [
                'id'    => 22,
                'name' => 'product_category_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 23,
                'name' => 'product_tag_create',
                'guard_name' => 'web',
            ],
            [
                'id'    => 24,
                'name' => 'product_tag_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 25,
                'name' => 'product_tag_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 26,
                'name' => 'product_tag_delete',
                'guard_name' => 'web',
            ],
            [
                'id'    => 27,
                'name' => 'product_tag_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 28,
                'name' => 'product_create',
                'guard_name' => 'web',
            ],
            [
                'id'    => 29,
                'name' => 'product_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 30,
                'name' => 'product_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 31,
                'name' => 'product_delete',
                'guard_name' => 'web',
            ],
            [
                'id'    => 32,
                'name' => 'product_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 33,
                'name' => 'audit_log_show',
                'guard_name' => 'web',
            ],
            [
                'id'    => 34,
                'name' => 'audit_log_access',
                'guard_name' => 'web',
            ],
            [
                'id'    => 35,
                'name' => 'profile_password_edit',
                'guard_name' => 'web',
            ],
            [
                'id'    => 36,
                'name' => 'profile_edit',
                'guard_name' => 'web',
            ],
        ];

        Permission::insert($permissions);
    }
}
