<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use App\Models\Module;
use App\Models\Department;
use App\Models\Battalion;
use App\Models\Teacher;
class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = faker::create();
       $data = [];
       $departments = Department::pluck('id')->toArray();
       $teachers = Teacher::pluck('id')->toArray();
       $battalions = Battalion::pluck('id')->toArray();
        
        for ($i=0; $i < 50; $i++) { 
            array_push($data ,[
                'module' => $faker->word(),
                'department_id' => $faker->randomElement($departments),
                'module_head_id' => $faker->randomElement($teachers),
                'battalion_id' => $faker->randomElement($battalions),
                'module_sector' => $faker->randomElement(['MI','ST','PR'])
            ]);
        }
        Module::insert($data);
        $teachers_modules=[];
        $teachers = Teacher::pluck('id')->toArray();
        $modules = Module::pluck('id')->toArray();
        for($i=0; $i < 90; $i++)
        {
            array_push($teachers_modules,[
                'teacher_id' => $faker->randomElement($teachers),
                'module_id'=> $faker->randomElement($modules),
                ]
            );
        }
        DB::table('teachers_modules')->insert($teachers_modules);
    }
}
