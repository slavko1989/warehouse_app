<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EmployeeSeederTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
   

    public function emp_test(){
        $this->seed(EmployeeSeeder::class);
    }
}
