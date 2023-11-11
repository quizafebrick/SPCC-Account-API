<?php

namespace Database\Seeders;

use App\Models\CurriculumSubject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curriculums = [
            [
                'description' => 'Introduction to Computing',
                'course_code' => 'IntroComp',
                'lec' => 2,
                'lab' => 2,
                'units' => 3
            ],
            [
                'description' => 'Computer Programming 1',
                'course_code' => 'ComPro 1',
                'lec' => 2,
                'lab' => 2,
                'units' => 3
            ],
            [
                'description' => 'Sining ng Komunikasyon',
                'course_code' => 'Fil 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Math in the Modern World',
                'course_code' => 'Math 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Art Appreciation',
                'course_code' => 'Art 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Physical 1',
                'course_code' => 'PE 1',
                'lec' => 2,
                'lab' => 0,
                'units' => 2
            ],
            [
                'description' => 'National Service Training Program 1',
                'course_code' => 'NSTP 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Literatures of the Philippines',
                'course_code' => 'Philit 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Purposive Communication',
                'course_code' => 'Eng 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Introduction to Human Commputer Interaction',
                'course_code' => 'HumCom',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Filipino Panitikan',
                'course_code' => 'Fil 2',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Computer Programming 2',
                'course_code' => 'ComPro 2',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Science Technology and Society',
                'course_code' => 'SciTech',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Understanding the Self',
                'course_code' => 'USelf',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Physical 2',
                'course_code' => 'PE 2',
                'lec' => 2,
                'lab' => 0,
                'units' => 2
            ],
            [
                'description' => 'National Service Training Program 2',
                'course_code' => 'NSTP 2',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Operating Systems',
                'course_code' => 'OS',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Data Structures and Algorithm',
                'course_code' => 'DataStruc',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Object Oriented Programming',
                'course_code' => 'OOP',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Platform Technology',
                'course_code' => 'PlatTech',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Discrete Mathematics',
                'course_code' => 'DiscMath',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Analytics Modeling',
                'course_code' => 'AnMod',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Physical 3',
                'course_code' => 'PE 3',
                'lec' => 2,
                'lab' => 0,
                'units' => 2
            ],
            [
                'description' => 'Quantitative Methods',
                'course_code' => 'QuanMet',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => "Rizal's Life and Works",
                'course_code' => 'Rizal',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Information Management',
                'course_code' => 'InfoMan',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Networking 1: Fundamentals',
                'course_code' => 'Net 1',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Integrative Programming and Technologies 1',
                'course_code' => 'InTech 1',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Web Applications Development',
                'course_code' => 'WebApps',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Technopreneur',
                'course_code' => 'Technop',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Physical 4',
                'course_code' => 'PE 4',
                'lec' => 2,
                'lab' => 0,
                'units' => 2
            ],
            [
                'description' => 'Fundamentals of Database Systems',
                'course_code' => 'FunDBS',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Analytics Techniques and Tools',
                'course_code' => 'AnTech',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Networking 2: Routing Fundamentals',
                'course_code' => 'Net 2',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'System Integration and Architecture 1',
                'course_code' => 'SIA 1',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Integrative Programming and Technologies 2',
                'course_code' => 'InTech 2',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Fundamental of Data Warehousing and Data Mining',
                'course_code' => 'FDWDM',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'System Analysis and Desgin',
                'course_code' => 'SAD',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Fundamentals of Business Analytics',
                'course_code' => 'FunBus',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Information Assurance and Security 1',
                'course_code' => 'IAS 1',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Ethics',
                'course_code' => 'Ethics',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Application Development and Emerging Technologies',
                'course_code' => 'ADET ',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Enterprise Data Management',
                'course_code' => 'EnDaMa',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Reading in Philippine History',
                'course_code' => 'PhilHis',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'The Contemporary World',
                'course_code' => 'ConWorld',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Information Assurance and Security 2',
                'course_code' => 'IAS 2',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Capstone Project and Research 1',
                'course_code' => 'ITProj 1',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'System Administrator and Maintenance 1',
                'course_code' => 'SAM',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
            [
                'description' => 'Social and Professional Issues',
                'course_code' => 'SocPro',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Capstone Project and Research 2',
                'course_code' => 'ITProj 2',
                'lec' => 3,
                'lab' => 0,
                'units' => 3
            ],
            [
                'description' => 'Practicum',
                'course_code' => 'Prac',
                'lec' => 6,
                'lab' => 0,
                'units' => 6
            ],
            [
                'description' => 'System Integration and Architecture 2',
                'course_code' => 'SIA 2',
                'lec' => 2,
                'lab' => 1,
                'units' => 3
            ],
        ];

        foreach ($curriculums as $curriculum) {
            CurriculumSubject::create($curriculum);
        }
    }
}
