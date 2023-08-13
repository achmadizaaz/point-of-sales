<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $roleAdministrator = Role::where('name', 'administrator')->first();
        $roleAdministrator->givePermissionTo('menu users');
        $roleAdministrator->givePermissionTo('read users');
        $roleAdministrator->givePermissionTo('create users');
        $roleAdministrator->givePermissionTo('update users');
        $roleAdministrator->givePermissionTo('delete users');

        $roleMember = Role::where('name', 'member')->first();
        $roleMember->givePermissionTo('menu users');
        $roleMember->givePermissionTo('read users');

    }
}
