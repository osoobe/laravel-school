<?php

// namespace Osoobe\School\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Osoobe\School\Models\Student;

class StudentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        if ( random_int(0, 100) % 2 == 0 ) {
            $gender = "M";
            $first_name = $this->faker->firstNameFemale();
        } else {
            $gender = "F";
            $first_name = $this->faker->firstNameMale();
        }
        $last_name = $this->faker->lastName();
        $grade = random_int(1,13);


        return [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $this->faker->unique()->safeEmail(),
            // 'school_id',
            // 'user_id',
            'gender' => $gender,
            'grade' => $grade,
            // 'form_class',
            // 'phone_number',
            'dob' => now()->subDays(5),
            'status' => "Registered",
            // 'description'
        ];
    }
}
