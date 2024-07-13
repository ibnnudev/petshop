<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::truncate();

        User::create([
            'name' => 'Dwi Arif',
            'email' => 'DwiArif@gmail.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Arifin Ilham',
            'email' => 'Arif@gmail.com.com',
            'password' => Hash::make('654321')
        ]);
    }
}
