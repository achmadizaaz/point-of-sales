<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = now();
        $roles = [
            ['name' => 'super administrator', 'guard_name' => 'web', 'created_at'=> $today, 'updated_at' => $today],
            ['name' => 'administrator', 'guard_name' => 'web', 'created_at'=> $today, 'updated_at' => $today],
            ['name' => 'member', 'guard_name' => 'web', 'created_at'=> $today, 'updated_at' => $today],
        ];

        Role::insert($roles);
    }
}
