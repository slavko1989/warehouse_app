<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Productivity;

class ProductivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                Productivity::factory(20)->create();

    }
}
