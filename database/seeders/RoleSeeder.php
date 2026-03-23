<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Support\RoleAndPermissionScope;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        RoleAndPermissionScope::global();

        Role::firstOrCreate(['name' => 'MASTER', 'guard_name' => 'sanctum']);
        Role::firstOrCreate(['name' => 'ADMIN', 'guard_name' => 'sanctum']);
    }
}
