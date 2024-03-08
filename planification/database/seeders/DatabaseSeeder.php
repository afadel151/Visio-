<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(BattalionSeeder::class);
        // $this->call(RoomSeeder::class);
        // $this->call(CompanySeeder::class);
        // $this->call(SectionSeeder::class);
        // $this->call(DepartmentSeeder::class);
        // $this->call(DaySeeder::class);
        // $this->call(TimingSeeder::class);
        // $this->call(TeacherSeeder::class);
        $this->call(ModuleSeeder::class);
        // $this->call(SchoolyearSeeder::class);
        // $this->call(WeekSeeder::class);
        // $this->call(SessionSeeder::class);
        // $this->call(AbscenceSeeder::class);
        // $this->call(EventSeeder::class);
        // $this->call(AdditiveSeeder::class);
        // $this->call(RectificationSeeder::class);
    }
}
