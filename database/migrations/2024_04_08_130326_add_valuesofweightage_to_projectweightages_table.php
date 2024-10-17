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
        Schema::table('projectweightages', function (Blueprint $table) {
            $table->json('valuesofweighatage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projectweightages', function (Blueprint $table) {
            $table->json('valuesofweighatage')->nullable();
        });
    }
};
