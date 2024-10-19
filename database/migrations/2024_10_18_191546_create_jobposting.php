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
        Schema::create('jobposting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobcategory_id');
            $table->string('job_post_name');
            $table->text('description');
            $table->date("Deadline");
            $table->decimal('min_salary');
            $table->decimal('max_salary');
            $table->decimal('min_experience');
            $table->decimal("max_experience");
            $table->string("degree");
            $table->text("requirement");
            $table->text("benefit");

            $table->unsignedBigInteger("state_id");
            $table->unsignedBigInteger("city_id");
            $table->unsignedBigInteger("agency_id");
            $table->timestamps();
            $table->foreign("jobcategory_id")->references("id")->on("jobcategories")->onDelete("cascade");
            $table->foreign("agency_id")->references('id')->on('agency')->onDelete('cascade');
            $table->foreign("city_id")->references("id")->on("city")->onDelete('cascade');
            $table->foreign("state_id")->references("id")->on("state")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobposting');
    }
};
