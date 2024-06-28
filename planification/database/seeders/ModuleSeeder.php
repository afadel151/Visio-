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

        for ($i = 0; $i < 50; $i++) {
            array_push($data, [
                'module' => $faker->word(),
                'department_id' => $faker->randomElement($departments),
            ]);
        }
        Module::insert($data);
        $teachers_modules = [];
        $teachers = Teacher::pluck('id')->toArray();
        $modules = Module::pluck('id')->toArray();
        $schoolyears = SchoolYear::pluck('id')->toArray();
        for ($i = 0; $i < 150; $i++) {
            array_push(
                $teachers_modules,
                [
                    'teacher_id' => $faker->randomElement($teachers),
                    'module_id' => $faker->randomElement($modules),
                    'schoolyear_id' => 1,
                    'cours' => $faker->randomElement([true, false]),
                    'td' => $faker->randomElement([true, false]),
                    'tp' => $faker->randomElement([true, false]),
                ]
            );
        }
        DB::table('teachers_modules')->insert($teachers_modules);
        $schoolyaer_modules = [];
        for ($i = 0; $i < 100; $i++) {
            $sector = $faker->randomElement(['PR', 'MI', 'ST']);
            $schoolyear_id = $faker->randomElement($schoolyears);
            $battalions = Battalion::where('schoolyear_id', $schoolyear_id)->get();
            if ($sector == 'PR') {
                $fstbattalions = $battalions->where('battalion', 1)->pluck('id')->toArray();
                array_push(
                    $schoolyaer_modules,
                    [
                        'schoolyear_id' => $schoolyear_id,
                        'module_id' => $faker->randomElement($modules),
                        'battalion_id' => $faker->randomElement($fstbattalions),
                        'semester' => $faker->randomElement(['1', '2']),
                        'module_sector' => 'PR',
                        'nb_cours' => 16,
                        'nb_tds' => 14,
                        'nb_tps' => 0
                    ]
                );
            } else {
                $msbattalions = $battalions->where('battalion', '!=', 1)->pluck('id')->toArray();
                array_push(
                    $schoolyaer_modules,
                    [
                        'schoolyear_id' => $schoolyear_id,
                        'module_id' => $faker->randomElement($modules),
                        'battalion_id' => $faker->randomElement($msbattalions),
                        'semester' => $faker->randomElement(['1', '2']),
                        'module_sector' => $sector,
                        'nb_cours' => 16,
                        'nb_tds' => 14,
                        'nb_tps' => 0
                    ]
                );
            }

        
        }
        DB::table('schoolyear_modules')->insert($schoolyaer_modules);
    }
}
