<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SchoolyearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data = [];
        for ($i=0; $i < 1; $i++) { 
            # code...
            array_push($data,[
                'start_year'=> $faker->year(),
            ]);
        }
        DB::table('schoolyears')->insert($data);
    }
}
