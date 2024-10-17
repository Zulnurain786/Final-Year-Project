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
        Schema::create('projectdocumentations', function (Blueprint $table) {
            $table->id();
            $table->string('purposelabstract');
            $table->string('documentation');
            $table->unsignedBigInteger('groupid');
            $table->foreign('groupid')->references('id')->on('studentgroups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectdocumentations');
    }
};
