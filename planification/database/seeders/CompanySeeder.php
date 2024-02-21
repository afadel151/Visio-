<?php

namespace Database\Seeders;
use App\Models\Company;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Battalion;
use App\Models\Room;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $batallions = Battalion::pluck('battalion_id')->toArray();
        $rooms = Room::where('room_type','Amphi')->pluck('room_id')->toArray();
        $data = [];
        for ($i=0; $i < 15; $i++) { 
            # code...
            array_push($data,[
                'battalion_id' => $faker->randomElement($batallions),
                'sector' => $faker->randomElement(['ST','MI','PR']),
                'company' => $faker->randomDigit(),
                'default_room_id' => $faker->randomElement($rooms),
            ]);
        }
        Company::insert($data);
    }
        
}
