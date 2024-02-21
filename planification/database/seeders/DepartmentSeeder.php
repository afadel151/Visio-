<?php

namespace Database\Seeders;
use App\Models\Department;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Battalion;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // $batallions = Battalion::pluck('battalion_id')->toArray();
        $data = [];
        for ($i=0; $i < 10; $i++) { 
            # code...
            array_push($data,[
                // 'battalion_id' => $faker->randomElement($batallions),
                'department' => $faker->word(),
                // 'end_Department_date' => $faker->date(),
            ]);
        }
        Department::insert($data);
    }
}
