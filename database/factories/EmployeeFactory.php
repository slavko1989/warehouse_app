<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use ImageFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Employee::class;


    public function definition(): array
    {

        return [
            'f_name'=>$this->faker->firstName,
            'l_name'=>$this->faker->lastName,
            'email'=>$this->faker->unique()->email,
            'date_of_birth'=>$this->faker->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
            'profile_image'=>$this->faker->imageUrl($width = 640,$height = 480),
            'position'=>$this->faker->jobTitle,
            'education'=>$this->faker->randomElement(['High School', 'Bachelor\'s Degree', 'Master\'s Degree', 'PhD']),
            'code_of_employee'=> $this->faker->unique()->numberBetween(1000, 9999),
            'years_in_company' => $this->faker->numberBetween(1,14),
        ];
    }
}
