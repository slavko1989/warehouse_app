<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productivity__salaries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('monthlys_productivity',10,2);
            $table->decimal('years_productivity',10,2);

            $table->unsignedBigInteger('productivity_id');
            $table->foreign('productivity_id')->references('id')->on('productivities')->onDelete('cascade');
            
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productivity__salaries');
    }
};
