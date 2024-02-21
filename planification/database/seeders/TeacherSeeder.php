<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Department;
use App\Models\Teacher;
use App\Models\Timing;
use App\Models\Day;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $departments = Department::pluck('department_id')->toArray();
        $teachers = [];
        
        for ($i=0; $i < 40; $i++) { 
            # code...
            array_push($teachers,[
                'teacher_grade' => $faker->randomElement(['A','B','C']),
                'teacher_name' => $faker->sentence(2),
                'teacher_type' => $faker->randomElement(['vacataire','employee','militaire','enp']),
                'department_id' => $faker->randomElement($departments),
                
            ]);
        }
        Teacher::insert($teachers);
        
        $teachers = Teacher::pluck('teacher_id')->toArray();
        $available_hours = [];
        $timings = Timing::pluck('timing_id')->toArray();
        $days = Day::pluck('day_id')->toArray();
        for ($i=0; $i < 300; $i++)
        { 
            array_push($available_hours,[
                'teacher_id' => $faker->randomElement($teachers),
                'day' => $faker->randomElement(['Sunday','Monday','Tuesday','Wednesday','Thursday']),
                'timing_id' => $faker->randomElement($timings),
            ]);
        }
        DB::table('teacher_available_hours')->insert($available_hours);

    }
}
