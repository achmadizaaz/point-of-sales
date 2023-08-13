<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $user = User::create([
            'name'  => 'Super Administrator',
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('superadmin'),
            'password_default' => 'superadmin',
            'is_active' => 1,
        ]);

        $user->assignRole('super administrator');

        $user = User::create([
            'name'  => 'Administrator',
            'username' => 'administrator',
            'email' => 'administrator@example.com',
            'password' => Hash::make('administrator'),
            'password_default' => 'administrator',
            'is_active' => 1,
        ]);
        
        $user->assignRole('administrator');

        $user = User::create([
            'name'  => 'Member',
            'username' => 'member',
            'email' => 'member@example.com',
            'password' => Hash::make('member'),
            'password_default' => 'member',
            'is_active' => 0,
        ]);

    }
}
