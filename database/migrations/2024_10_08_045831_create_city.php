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
        Schema::create('city', function (Blueprint $table) {
            $table->id();
            $table->string('city_name');
            $table->unsignedBigInteger('state_id');
            $table->timestamps();

            $table->foreign('state_id')->references('id')->on('state')->onDelete('cascade');
            //$table->foreign('jobcategory_id')->references('id')->on('jobcategories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('city');
    }
};
