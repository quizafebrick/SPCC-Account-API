<?php

namespace Database\Seeders;

use App\Models\YearLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YearLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $yearLevels = [
            ['name' => 'First Year'],
            ['name' => 'Second Year'],
            ['name' => 'Third Year'],
            ['name' => 'Fourth Year'],
        ];

        foreach ($yearLevels as $yearLevel) {
            YearLevel::create($yearLevel);
        }
    }
}
