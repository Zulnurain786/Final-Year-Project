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
        Schema::create('projectweightages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('purposelid');
            $table->unsignedBigInteger('supervisorid');
            $table->json('keyNvalue');
            $table->foreign('purposelid')->references('id')->on('preliminaryproposals')->onDelete('cascade');
            $table->foreign('supervisorid')->references('id')->on('supervisers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectweightages');
    }
};
