<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        User::create([
            'name' => 'abdallh',
            'email' => 'abdallh@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '12345678',
        ]);

        DB::table('users')->insert([
            'name' => 'System Admin',
            'email' => 'sys@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '123456789',
        ]);
    }
}
