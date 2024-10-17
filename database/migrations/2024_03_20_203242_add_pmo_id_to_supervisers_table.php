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
        Schema::table('supervisers', function (Blueprint $table) {
            $table->foreignId('pmo_id')->constrained('pmos')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('supervisers', function (Blueprint $table) {
            $table->dropForeign(['pmo_id']);
            
        });
    }
};