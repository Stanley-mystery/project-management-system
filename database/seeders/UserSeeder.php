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
            'password' => Hash::make('admin_password'), 
            'role_id' => $adminRole->id,
        ]);

        // Create a project manager user
        $clientRole = Role::where('slug', 'client')->first();
        User::create([
            'name' => 'Victor Nwogu',
            'email' => 'victor@gmail.com',
            'password' => Hash::make('user_password'),
            'role_id' => $clientRole->id,
        ]);

        // Create a staff user
        $sellerRole = Role::where('slug', 'seller')->first();
        User::create([
            'name' => 'Stanley Nwogu',
            'email' => 'Stanley@gmail.com',
            'password' => Hash::make('user_password'),
            'role_id' => $sellerRole->id,
        ]);
    }
}
