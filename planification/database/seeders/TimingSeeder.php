<?php

namespace Database\Seeders;
use App\Models\Timing;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        $data = [];
        for ($i=0; $i < 5; $i++) { 
            # code...
            array_push($data,[
                'session_start' => $faker->time(),
                'session_finish' => $faker->time(),
            ]);
        }
        Timing::insert($data);
    }
}
