<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();

        $admin->name = 'Admin User';
        $admin->email = 'admin@gmail.com';
        $admin->password = '$2y$12$ES98di./5dm52q.9lKuD8uqhO8zYKUfB/g7Hlc4N1TRjNUbCaU7HW';

        $admin -> save();
    }
}
