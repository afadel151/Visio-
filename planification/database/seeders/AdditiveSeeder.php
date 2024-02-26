<?php

namespace Database\Seeders;

use App\Models\Additive;
use App\Models\Timing;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\Session;
use App\Models\Room;
use App\Models\Timning;
use App\Models\Week;

class AdditiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $timings = Timing::pluck('id')->toArray();
        $teachers = Teacher::pluck('id')->toArray();
        $rooms = Room::pluck('id')->toArray();
        $modules = Module::pluck('id')->toArray();
        $weeks = Week::pluck('id')->toArray();

        $data = [];
        for ($i = 0; $i < 50; $i++) {
            # code...
            array_push($data, [
                'additive_date' => $faker->date(),
                'timing_id' => $faker->randomElement($timings),
                'module_id' => $faker->randomElement($modules),
                'teacher_id' => $faker->randomElement($teachers),
                'room_id' => $faker->randomElement($rooms),
                'session_type' => $faker->randomElement(['Td', 'Tp', 'Cour', 'Sport']),
                'week_id' => $faker->randomElement($weeks),
                'additive_type' => $faker->randomElement(['Supp','Ratt','Facul']),
                'absented' => $faker->boolean(),
            ]);
        }
        Additive::insert($data);
    }
}
