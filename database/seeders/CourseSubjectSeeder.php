<?php

namespace Database\Seeders;

use App\Models\CourseSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courseSubjects = [
            [
                'curriculum_subject_id' => 1,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 2,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 3,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 4,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 5,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 6,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 7,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 8,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 9,
                'semester_id' => 1,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 10,
                'semester_id' => 2,
                'year_level_id' => 1,
                'pre_requisite' => 1
            ],
            [
                'curriculum_subject_id' => 11,
                'semester_id' => 2,
                'year_level_id' => 1,
                'pre_requisite' => 3
            ],
            [
                'curriculum_subject_id' => 12,
                'semester_id' => 2,
                'year_level_id' => 1,
                'pre_requisite' => 2
            ],
            [
                'curriculum_subject_id' => 13,
                'semester_id' => 2,
                'year_level_id' => 1
            ],
            [
                'curriculum_subject_id' => 14,
                'semester_id' => 2,
                'year_level_id' => 1,
                'pre_requisite' => 5
            ],
            [
                'curriculum_subject_id' => 15,
                'semester_id' => 2,
                'year_level_id' => 1,
                'pre_requisite' => 6
            ],
            [
                'curriculum_subject_id' => 16,
                'semester_id' => 2,
                'year_level_id' => 1,
                'pre_requisite' => 7
            ],
            [
                'curriculum_subject_id' => 17,
                'semester_id' => 2,
                'year_level_id' => 1
            ],

            [
                'curriculum_subject_id' => 18,
                'semester_id' => 1,
                'year_level_id' => 2,
                'pre_requisite' => 12
            ],
            [
                'curriculum_subject_id' => 19,
                'semester_id' => 1,
                'year_level_id' => 2,
                'pre_requisite' => 12
            ],
            [
                'curriculum_subject_id' => 20,
                'semester_id' => 1,
                'year_level_id' => 2,
                'pre_requisite' => 1
            ],
            [
                'curriculum_subject_id' => 21,
                'semester_id' => 1,
                'year_level_id' => 2,
                'pre_requisite' => 4
            ],
            [
                'curriculum_subject_id' => 22,
                'semester_id' => 1,
                'year_level_id' => 2,
                'pre_requisite' => 4
            ],
            [
                'curriculum_subject_id' => 23,
                'semester_id' => 1,
                'year_level_id' => 2,
                'pre_requisite' => 15
            ],
            [
                'curriculum_subject_id' => 24,
                'semester_id' => 1,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 25,
                'semester_id' => 1,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 26,
                'semester_id' => 2,
                'year_level_id' => 2,
                'pre_requisite' => 24
            ],
            [
                'curriculum_subject_id' => 27,
                'semester_id' => 2,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 28,
                'semester_id' => 2,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 29,
                'semester_id' => 2,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 30,
                'semester_id' => 2,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 31,
                'semester_id' => 2,
                'year_level_id' => 2,
                'pre_requisite' => 23
            ],
            [
                'curriculum_subject_id' => 32,
                'semester_id' => 2,
                'year_level_id' => 2
            ],
            [
                'curriculum_subject_id' => 33,
                'semester_id' => 2,
                'year_level_id' => 2,
                'pre_requisite' => 22
            ],
            [
                'curriculum_subject_id' => 34,
                'semester_id' => 1,
                'year_level_id' => 3,
                'pre_requisite' => 27
            ],
            [
                'curriculum_subject_id' => 35,
                'semester_id' => 1,
                'year_level_id' => 3,
                'pre_requisite' => '28, 24'
            ],
            [
                'curriculum_subject_id' => 36,
                'semester_id' => 1,
                'year_level_id' => 3,
                'pre_requisite' => 28
            ],
            [
                'curriculum_subject_id' => 37,
                'semester_id' => 1,
                'year_level_id' => 3,
                'pre_requisite' => 32
            ],
            [
                'curriculum_subject_id' => 38,
                'semester_id' => 1,
                'year_level_id' => 3
            ],
            [
                'curriculum_subject_id' => 39,
                'semester_id' => 1,
                'year_level_id' => 3
            ],
            [
                'curriculum_subject_id' => 40,
                'semester_id' => 2,
                'year_level_id' => 3,
                'pre_requisite' => 35
            ],
            [
                'curriculum_subject_id' => 41,
                'semester_id' => 2,
                'year_level_id' => 3
            ],
            [
                'curriculum_subject_id' => 42,
                'semester_id' => 2,
                'year_level_id' => 3,
                'pre_requisite' => 36
            ],
            [
                'curriculum_subject_id' => 43,
                'semester_id' => 2,
                'year_level_id' => 3,
                'pre_requisite' => 39
            ],
            [
                'curriculum_subject_id' => 44,
                'semester_id' => 2,
                'year_level_id' => 3
            ],
            [
                'curriculum_subject_id' => 45,
                'semester_id' => 2,
                'year_level_id' => 3
            ],
            [
                'curriculum_subject_id' => 46,
                'semester_id' => 1,
                'year_level_id' => 4,
                'pre_requisite' => 40
            ],
            [
                'curriculum_subject_id' => 47,
                'semester_id' => 1,
                'year_level_id' => 4
            ],
            [
                'curriculum_subject_id' => 48,
                'semester_id' => 1,
                'year_level_id' => 4,
                'pre_requisite' => 40
            ],
            [
                'curriculum_subject_id' => 49,
                'semester_id' => 1,
                'year_level_id' => 4
            ],
            [
                'curriculum_subject_id' => 50,
                'semester_id' => 2,
                'year_level_id' => 4,
                'pre_requisite' => 47
            ],
            [
                'curriculum_subject_id' => 51,
                'semester_id' => 2,
                'year_level_id' => 4
            ],
            [
                'curriculum_subject_id' => 52,
                'semester_id' => 2,
                'year_level_id' => 4,
                'pre_requisite' => 35
            ],
        ];

        foreach ($courseSubjects as $courseSubject) {
            CourseSubject::create($courseSubject);
        }
    }
}
