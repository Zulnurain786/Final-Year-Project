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
        Schema::create('groupsubmiteditems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('groupid'); // Change to unsignedBigInteger for foreign keys
            $table->integer('booklet');
            $table->integer('CD');
            $table->integer('flex');
            $table->timestamps();
            // Define foreign key constraint
            $table->foreign('groupid')->references('id')->on('studentgroups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groupsubmiteditems');
    }
};
