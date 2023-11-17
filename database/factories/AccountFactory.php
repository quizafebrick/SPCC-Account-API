<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = $this->faker->firstName;
        $middleName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $email = strtolower($lastName . '_' . $firstName) . '@spcc.edu.ph';
        $studentNo = '04-' . $this->faker->randomNumber(2, true) . '-' . $this->faker->randomNumber(5, true);
        $section_id = random_int(1, 18);
        $semester_id = random_int(1, 2);
        $status = $this->faker->boolean(80) ? 'Regular' : 'Irregular';

        return [
            'email_address' => $email,
            'firstname' => $firstName,
            'middlename' => $middleName,
            'lastname' => $lastName,
            'student_no' => $studentNo,
            'section_id' => $section_id,
            'semester_id' => $semester_id,
            'status' => $status,
        ];
    }
}
