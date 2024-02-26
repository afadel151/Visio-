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
        $batallions = Battalion::pluck('id')->toArray();
        $rooms = Room::pluck('id')->toArray();
        $data = [];
        for ($i=0; $i < 15; $i++) { 
            # code...
              $battalion_id = $faker->randomElement($batallions);
              if ($battalion_id == 1) {
                $sector = 'PR';
              }
              else {
                $sector = $faker->randomElement(['ST','MI']);
              }
            array_push($data,[
                'battalion_id' => $battalion_id,
                'sector' => $sector,
                'company' => $faker->randomDigit(),
                'default_room_id' => $faker->randomElement($rooms),
            ]);
        }
        Company::insert($data);
    }
        
}
