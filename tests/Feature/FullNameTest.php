<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Employee;

class FullNameTest extends TestCase
{
    use RefreshDatabase;

    public function it_has_full_name_column_concatenation_of_first_and_last_name(): void
    {
            // Proveravamo da li tabela "employees" sadrži kolonu "full_name"
        $this->assertTrue(Schema::hasColumn('employees', 'full_name'));

        // Kreiramo novog zaposlenog
        $employee = Employee::create([
            'f_name' => 'John',
            'l_name' => 'Doe',
        ]);

        // Proveravamo da li je "full_name" kolona konkatencija "f_name" i "l_name"
        $this->assertEquals('John Doe', $employee->full_name);
        $response->assertStatus(200);
    
    }
}
