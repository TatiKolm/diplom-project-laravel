<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  
        public function run(): void
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'tatka_kol@mail.ru',
            'password' => Hash::make('00000000')
        ]);

        $user->assignRole('admin');
    }
}

