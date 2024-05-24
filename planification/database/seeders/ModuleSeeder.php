<?php

namespace Database\Seeders;

use App\Models\SchoolYear;
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
        
        for ($i=0; $i < 25; $i++) { 
            $b = $faker->randomElement([1,2,3]);
            if ($b == 1) {
                $sec = 'PR';
            }
            else {
                $sec = $faker->randomElement(['MI','ST']);
            }
            array_push($data ,[
                'module' => $faker->word(),
                'department_id' => $faker->randomElement($departments),
                'module_head_id' => $faker->randomElement($teachers),
                'battalion' => $b,
                'semester' => $faker->randomElement(['1','2']),
                'module_sector' => $sec,
                'nb_cours' => 16,
                'nb_tds' => 14,
                'nb_tps' => 5
            ]);
        }
        for ($i=0; $i < 35; $i++) { 
            $b = $faker->randomElement([1,2,3]);
            if ($b == 1) {
                $sec = 'PR';
            }
            else {
                $sec = $faker->randomElement(['MI','ST']);
            }
            array_push($data ,[
                'module' => $faker->word(),
                'department_id' => $faker->randomElement($departments),
                'module_head_id' => $faker->randomElement($teachers),
                'battalion' => $b,
                'semester' => $faker->randomElement(['1','2']),
                'module_sector' => $sec,
                'nb_cours' => 16,
                'nb_tds' => 14,
                'nb_tps' => 0
            ]);
        }
        Module::insert($data);
        $teachers_modules=[];
        $teachers = Teacher::pluck('id')->toArray();
        $modules = Module::pluck('id')->toArray();
        $schoolyears = SchoolYear::pluck('id')->toArray();
        for($i=0; $i < 150; $i++)
        {
            array_push($teachers_modules,[
                'teacher_id' => $faker->randomElement($teachers),
                'module_id'=> $faker->randomElement($modules),
                'schoolyear_id'=> 1,
                'cours' => $faker->randomElement([true,false]),
                'td' => $faker->randomElement([true,false]),
                'tp' => $faker->randomElement([true,false]),
                ]
            );
        }
        DB::table('teachers_modules')->insert($teachers_modules);
    }
}
