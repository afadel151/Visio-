<?php

namespace Database\Seeders;
use App\Models\Room;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Battalion;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        // $batallions = Battalion::pluck('battalion_id')->toArray();
        $data = [];
        for ($i=0; $i < 40; $i++) { 
            # code...
            array_push($data,[
                'room_type' => $faker->randomElement(['Td','Amphi','Labo','Bib','Stade','Autre']),
                'room' => $faker->word(),
            ]);
        }
        Room::insert($data);
    }
}
