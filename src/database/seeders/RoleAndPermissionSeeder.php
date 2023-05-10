<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        Permission::create(['name' => 'create-books']);
        Permission::create(['name' => 'edit-books']);
        Permission::create(['name' => 'delete-books']);

        Permission::create(['name' => 'create-genres']);
        Permission::create(['name' => 'edit-genres']);
        Permission::create(['name' => 'delete-genres']);

        Permission::create(['name' => 'create-editors']);
        Permission::create(['name' => 'edit-editors']);
        Permission::create(['name' => 'delete-editors']);

        $adminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);

        $adminRole->givePermissionTo([
            'create-books',
            'edit-books',
            'delete-books',
            'create-genres',
            'edit-genres',
            'delete-genres',
            'create-editors',
            'edit-editors',
            'delete-editors',
        ]);

        $editorRole->givePermissionTo([
            'create-books',
            'edit-books',
            'delete-books',
        ]);
    }
}
