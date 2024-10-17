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
        Schema::create('studentgroups', function (Blueprint $table) {
            $table->id();
            $table->string('m1regno')->default(0);
            $table->string('m2regno')->default(0);
            $table->string('m3regno')->default(0);
            $table->Integer('groupmembers');
            $table->Integer('roleid')->default(3);
            $table->Integer('loginstatus')->default(0);
            $table->Integer('totalviewnews')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentgroups');
    }
};
