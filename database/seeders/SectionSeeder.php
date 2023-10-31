<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            ['name' => "101-A"],
            ['name' => "101-B"],
            ['name' => "101-C"],
            ['name' => "101-D"],
            ['name' => "101-E"],
            ['name' => "101-F"],
            ['name' => "101-G"],
            ['name' => "101-H"],
            ['name' => "101-I"],
            ['name' => "201-A"],
            ['name' => "201-B"],
            ['name' => "201-C"],
            ['name' => "201-D"],
            ['name' => "301-A"],
            ['name' => "301-B"],
            ['name' => "301-C"],
            ['name' => "401-A"],
            ['name' => "401-B"],
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
