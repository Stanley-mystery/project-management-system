<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::where('slug', 'admin')->first();
        User::create([
            'name' => 'Femi Taiwo',
            'email' => 'femi@gmail.com',
            'password' => Hash::make('admin_password'), // Always hash passwords
            'role_id' => $adminRole->id,
        ]);

        // Create a project manager user
        $projectManagerRole = Role::where('slug', 'project_manager')->first();
        User::create([
            'name' => 'Victor Nwogu',
            'email' => 'victor@gmail.com',
            'password' => Hash::make('pm_password'),
            'role_id' => $projectManagerRole->id,
        ]);

        // Create a developer user
        $developerRole = Role::where('slug', 'developer')->first();
        User::create([
            'name' => 'Stanley Nwogu',
            'email' => 'Stanley@gmail.com',
            'password' => Hash::make('dev_password'),
            'role_id' => $developerRole->id,
        ]);
    }
}
