<?php

namespace Database\Seeders;
use App\Models\Company;
use App\Models\Room;
use App\Models\Section;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $companies = Company::pluck('company_id')->toArray();
        $rooms = Room::where('room_type','Td')->pluck('room_id')->toArray();
        $data = [];
        for ($i=0; $i < 45; $i++) { 
            # code...
            array_push($data,[
                'company_id' => $faker->randomElement($companies),
                'section' => $faker->randomDigit(),
                'default_room_id' => $faker->randomElement($rooms)
            ]);
        }
        Section::insert($data);
    }
}
