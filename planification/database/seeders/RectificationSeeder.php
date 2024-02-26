<?php

namespace Database\Seeders;

use App\Models\Absence;
use App\Models\Rectification;
use App\Models\Timing;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Battalion;
use App\Models\Module;
use App\Models\Teacher;
use App\Models\Session;
use App\Models\Room;
use App\Models\Timning;
use App\Models\Week;

class RectificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $timings = Timing::pluck('id')->toArray();
        $absences = Absence::where('rectified',false)->pluck('id')->toArray();
        $teachers = Teacher::pluck('id')->toArray();
        $rooms = Room::pluck('id')->toArray();
        $modules = Module::pluck('id')->toArray();
        $weeks = Week::pluck('id')->toArray();

        $data = [];
        for ($i = 0; $i < 10; $i++) {
            # code...
            $id = $faker->unique()->randomElement($absences);
            array_push($data, [
                'absence_id'=> $id,
                'rectification_date' => $faker->date(),
                'timing_id' => $faker->randomElement($timings),
                'room_id' => $faker->randomElement($rooms),
            ]);
            Absence::find($id)->update(['rectified' => true]);
        }
        Rectification::insert($data);
    }
}
