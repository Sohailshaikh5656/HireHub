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
        Schema::create('jobsubcategories', function (Blueprint $table) {
            $table->id();
            $table->string('job_sub_category');
            $table->string('description');
            $table->boolean('status');
            $table->unsignedBigInteger('jobcategory_id');
            $table->timestamps();

            $table->foreign('jobcategory_id')->references('id')->on('jobcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobsubcategories');
    }
};
