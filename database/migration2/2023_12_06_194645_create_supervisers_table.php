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
        Schema::create('supervisers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain');
            $table->string('pnumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->Integer('rolid')->default(2); // Assuming role ID is an unsigned big integer
            $table->Integer('loginstatus')->default(1);
            $table->Integer('totalviewnews')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supervisers');
    }
};
