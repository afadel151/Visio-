<?php


namespace Database\Seeders;

use App\Models\Timing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\Session;
use App\Models\Room;
use App\Models\Timning;
use App\Models\Week;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = faker::create();
       $data = [];
       $timings = Timing::pluck('id')->toArray();
       $teachers = Teacher::pluck('id')->toArray();
       $rooms = Room::pluck('id')->toArray();
       $modules = Module::pluck('id')->toArray();
       $weeks = Week::pluck('id')->toArray();
        
        for ($i=0; $i < 1150; $i++) { 
            array_push($data ,[
                'session_date' => $faker->date(),
                'timing_id' => $faker->randomElement($timings),
                'module_id' => $faker->randomElement($modules),
                'teacher_id' => $faker->randomElement($teachers),
                'room_id' => $faker->randomElement($rooms),
                'session_type' => $faker->randomElement(['Td','Tp','Cour','Mini projet','Bibliotheque','Brigade','Sport']),
                'week_id' => $faker->randomElement($weeks),
                'absented' => $faker->boolean(),
            ]);
        }
        Session::insert($data);
    }
}

