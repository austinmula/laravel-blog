<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        // create permissions
        $permissions = [
            'read blogs',
            'comment on blogs',
            'create blogs',
            'edit blogs',
            'delete blogs',
            'delete users',
            'delete comments',
            'edit users',
            'view users',
            'create users',
         ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role1->givePermissionTo('read blogs');
        $role1->givePermissionTo('comment on blogs');
        $role1->givePermissionTo('delete comments');

        $role2 = Role::create(['name' => 'admin']);

        foreach ($permissions as $permission) {
            $role2->givePermissionTo($permission);
        }


        $role3 = Role::create(['name' => 'author']);
        $role3->givePermissionTo('read blogs');
        $role3->givePermissionTo('comment on blogs');
        $role3->givePermissionTo('delete comments');
        $role3->givePermissionTo('edit blogs');
    }
}
