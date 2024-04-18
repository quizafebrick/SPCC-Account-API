<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountStaticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staticAccounts = [
            [
                'student_no' => '04-19-30988',
                'firstname' => 'Febrick',
                'middlename' => 'Barcial',
                'lastname' => 'Quiza',
                'email_address' => 'quiza_febrick@spcc.edu.ph',
                'section_id' => '17',
                'semester_id' => '1',
                'status' => 'Regular',
                'rfid_no' => '0600953248',
            ],
            [
                'student_no' => '04-20-31101',
                'firstname' => 'Charlotte',
                'middlename' => 'Partoza',
                'lastname' => 'Mateo',
                'email_address' => 'mateo_charlotte@spcc.edu.ph',
                'section_id' => '17',
                'semester_id' => '1',
                'status' => 'Regular',
                'rfid_no' => '0600953248'
            ]
        ];

        foreach ($staticAccounts as $staticAccount) {
            Account::create($staticAccount);
        }
    }
}
