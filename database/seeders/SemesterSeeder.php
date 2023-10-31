<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semesters = [
            ['name' => "First Semester"],
            ['name' => "Second Semester"],
        ];

        foreach ($semesters as $semester) {
            Semester::create($semester);
        }
    }
}
