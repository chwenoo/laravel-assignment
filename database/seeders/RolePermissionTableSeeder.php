<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminPermission = Permission::whereIn('name',[
            'dashboard','role_list','role_create','role_edit','permission_list','permission_create','permission_edit',
            'article_list','article_edit','article_create','article_delete','user_list','user_create','user_edit'
        ])->pluck('name');

        $role1 = Role::find(1);

        $role1->syncPermissions($adminPermission);

        $managerPermission = Permission::whereIn('name',[
            'dashboard','article_list','article_edit','article_create','article_delete',
        ])->pluck('name');

        $role2 = Role::find(2);
        $role2->syncPermissions($managerPermission);

        $editorPermission = Permission::whereIn('name',[
            'dashboard','article_list'
        ])->pluck('name');

        $role3 = Role::find(3);
        $role3->syncPermissions($editorPermission);
    }
}
