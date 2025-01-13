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
        'name' => 'Client',
        'slug' => 'client',
        'description' => 'Can make purchases and view content',
    ]);

    Role::create([
        'name' => 'Seller',
        'slug' => 'seller',
        'description' => 'Can make Sales, post and view content',
    ]);
    }
}
