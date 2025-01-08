<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Create roles for your application
      Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator with full access to all features',
    ]);

    Role::create([
        'name' => 'Project Manager',
        'slug' => 'project_manager',
        'description' => 'Manages projects, tasks, and team members',
    ]);

    Role::create([
        'name' => 'Staff',
        'slug' => 'staff',
        'description' => 'Works on assigned tasks and projects',
    ]);
    }
}
