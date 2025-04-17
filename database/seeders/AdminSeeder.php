<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;    
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
     User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => hash::make('12345678'),
        'is_admin' => 1  ]);   
    }
}
