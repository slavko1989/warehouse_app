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
        Schema::table('employee_teams', function (Blueprint $table) {

            $table->dropColumn('comment');
            $table->dropColumn('performance_review');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee_teams', function (Blueprint $table) {
            $table->text('comment');
            $table->text('performance_review');
        });
    }
};
