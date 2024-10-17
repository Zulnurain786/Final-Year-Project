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
        Schema::table('allgroupslogins', function (Blueprint $table) {
            $table->integer('loginstatus')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('allgroupslogins', function (Blueprint $table) {
            $table->integer('loginstatus')->default(0);
        });
    }
};
