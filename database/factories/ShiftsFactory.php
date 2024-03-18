<?php

namespace Database\Factories;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shifts;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShiftsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
    $dayInWeek = Carbon::now()->subDays(rand(0, 6))->format('Y-m-d');
    $shift = $this->faker->randomElement(['First', 'Second', 'Third']);
    $employeeId = Employee::inRandomOrder()->first()->id;

  
    switch ($shift) {
        case 'First':
            $workedFrom = 6;
            $workedTo = 14;
            break;
        case 'Second':
            $workedFrom = 14;
            $workedTo = 22;
            break;
        case 'Third':
            $workedFrom = 22;
            $workedTo = 6; 
            break;
    }

    return [
        'shifts' => $shift,
        'worked_from' => $workedFrom,
        'worked_to' => $workedTo,
        'day_in_week' => $dayInWeek,
        'employeeId' => $employeeId
    ];
    
    }
}
