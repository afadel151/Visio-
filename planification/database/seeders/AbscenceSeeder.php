<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Session;
use App\Models\Absence;
use App\Models\Additive;
class AbscenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $sessions = Session::where('absented',true)->pluck('id')->toArray();
        // $add = Additive::where('absented',true)->pluck()
        
        $data = [];
        for ($i=0; $i < 50; $i++) { 
            # code...
            array_push($data,[
                'session_id' => $faker->randomElement($sessions),//morph
                'rectified' => $faker->boolean(),
            ]);
        }
        Absence::insert($data);
    }
}
