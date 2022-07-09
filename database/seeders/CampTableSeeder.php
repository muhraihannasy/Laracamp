<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "title" => "Gila Belajar",
                "slug" => "gila-belajar",
                "price" => 300,
            ],
            [
                "title" => "Baru Mulai",
                "slug" => "baru-mulai",
                "price" => 150,
            ],
        ];

        foreach ($data as $key => $camp) {
            Camp::create($camp);
        }
    }
}
