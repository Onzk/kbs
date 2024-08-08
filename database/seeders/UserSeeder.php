<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = "bSdD1ywXC1";
        $admin = \App\Models\User::create([
            "lastname" => "SUPER",
            "firstname" => "admin",
            "email" => "super.admin@kbs.com",
            "photo" => "storage/user/default.png",
            "password" => \Illuminate\Support\Facades\Hash::make($password),
            "enabled" => true,
        ]);
    }
}
