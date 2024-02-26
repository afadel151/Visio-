<?php

namespace Database\Seeders;
use App\Models\Week;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Battalion;
use Illuminate\Support\Facades\DB;
class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $batallions = Battalion::pluck('id')->toArray();
        $schoolyears = DB::table('schoolyears')->pluck('id')->toArray();
        $data = [];

        for ($i=0; $i < 5; $i++) { 
            # code...
            array_push($data,[
                'battalion_id' => $faker->randomElement($batallions),
                'start_week_date' => $faker->date(),
                'schoolyear_id'=> $faker->randomElement($schoolyears),
                'end_week_date' => $faker->date(),
                'week_type' => $faker->randomElement(['cours', 'detente', 'Examen partiel', 'Examen final', 'cours magistreaux','formation militaire','conduite','bivouac','revision']),
                'week_number' => $i,
                'semester' => $faker->randomElement(['1','2']),
            ]);
        }
        Week::insert($data);
    }
}
