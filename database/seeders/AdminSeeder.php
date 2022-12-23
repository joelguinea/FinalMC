<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder; 

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'joelguinea@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('qweqweqwe'),
            'remember_token' => null,
        ]);
        $user->assignRole('admin');
        

        $user = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('qweqweqwe'),
            'remember_token' => null,
        ]);
        $user->assignRole('user');
        $user->can('edit axies');
    }
}
