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
        $this->call(AccountSeeder::class);
        $this->call(AccountStaticSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(YearLevelSeeder::class);
        $this->call(CourseSubjectSeeder::class);
    }
}
