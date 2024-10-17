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
        Schema::table('studentgroups', function (Blueprint $table) {
            $table->unsignedBigInteger('loginid');
            // Define the foreign key constraint with cascade on delete
            $table->foreign('loginid')
                ->references('id')
                ->on('allgroupslogins')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('studentgroups', function (Blueprint $table) {
            //
        });
    }
};
