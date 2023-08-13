<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = now();
        $permissions = [
            ['name' => 'menu users','guard_name' => 'web','created_at'=> $today,'updated_at' => $today],
            ['name' => 'read users','guard_name' => 'web','created_at'=> $today,'updated_at' => $today],
            ['name' => 'create users','guard_name' => 'web','created_at'=> $today,'updated_at' => $today],
            ['name' => 'update users','guard_name' => 'web','created_at'=> $today,'updated_at' => $today],
            ['name' => 'delete users','guard_name' => 'web','created_at'=> $today,'updated_at' => $today],
        ];

        Permission::insert($permissions);
    }

    // END PERMISSIONS
}
