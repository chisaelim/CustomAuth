<?php

namespace Database\Seeders;

use App\Models\User;
use App\Support\RoleAndPermissionScope;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        RoleAndPermissionScope::global();

        $master = User::factory()->create([
            'name' => 'Master User',
            'username' => 'master',
            'password' => bcrypt('master'),
        ]);
        $master->assignRole('MASTER');

        $admin = User::factory()->create([  
            'name' => 'Admin User',
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);
        $admin->assignRole('ADMIN');
    }
}
