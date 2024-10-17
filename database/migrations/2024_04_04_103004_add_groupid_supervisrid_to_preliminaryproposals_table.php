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
        Schema::table('preliminaryproposals', function (Blueprint $table) {
            $table->unsignedBigInteger('groupid');
            $table->foreign('groupid')->references('id')->on('studentgroups')->onDelete('cascade');
            
            $table->unsignedBigInteger('superviserid');
            $table->foreign('superviserid')->references('id')->on('supervisers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('preliminaryproposals', function (Blueprint $table) {
            //
        });
    }
};
