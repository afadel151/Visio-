<?php

namespace Database\Seeders;
use App\Models\Event;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Battalion;
use App\Models\Week;
class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $batallions = Battalion::pluck('id')->toArray();
        $weeks  = Week::pluck('id')->toArray();
        
        $data = [];
        for ($i=0; $i < 10; $i++) { 
            # code...
            $w = $faker->randomElement($weeks);
            $week = Week::find($w);
            array_push($data,[
                'week_id'=> $w,
                'event' => $faker->word(),
                'event_date' => $faker->dateTime('2024-06-27 00:00:00'),
            ]);
        }
        Event::insert($data);
    }
}
