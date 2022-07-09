<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            "name" => "Muh Raihan",
            "email" => "muhrey@com",
            "password" => bcrypt("password"),
            "is_admin" => true
        ];

        User::create($data);
    }
}
