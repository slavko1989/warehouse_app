<?php

namespace Database\Factories;
use App\Models\Productivity;
use App\Models\Employee;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productivity>
 */
class ProductivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $employeeIds = Employee::pluck('id')->toArray();
        return [
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'daily_of_boxes' => $this->faker->numberBetween(1,13000),
            'daily_of_papers' => $this->faker->numberBetween(1,500),
            'employee_id' => $this->faker->randomElement($employeeIds),
        ];
    }
}
