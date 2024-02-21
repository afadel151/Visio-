<?php

namespace Database\Seeders;
use App\Models\Day;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Battalion;
class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // $batallions = Battalion::pluck('battalion_id')->toArray();
        $data = [];
        for ($i=0; $i < 5; $i++) { 
            # code...
            array_push($data,[
                // 'battalion_id' => $faker->randomElement($batallions),
                'day' => $faker->unique()->randomElement(['Sunday','Monday','Tuesday','Wednesday','Thursday']),
                // 'end_Department_date' => $faker->date(),
            ]);
        }
        Day::insert($data);
    }
}
