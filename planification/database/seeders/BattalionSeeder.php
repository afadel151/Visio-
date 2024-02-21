<?php

namespace Database\Seeders;
use App\Models\Battalion;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BattalionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $batallions = Battalion::pluck('battalion_id')->toArray();
        $data = [];
        for ($i=0; $i < 3; $i++) { 
            # code...
            array_push($data,[
                'battalion' => $faker->unique()->randomElement(['1','2','3']),
            ]);
        }
        Battalion::insert($data);
    }
}
