<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' =>'admin',
            'email' =>'admin@gmail.com',
            'password'=>Hash::make('111111')
        ]);
        User::create([
            'name' =>'admins',
            'email' =>'a@gmail.com',
            'password'=>Hash::make('111111')
        ]);
        User::create([
            'name' =>'ald',
            'email' =>'ae@gmail.com',
            'password'=>Hash::make('111111')
        ]);
    }
}

