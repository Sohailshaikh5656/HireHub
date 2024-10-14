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
        Schema::create('agency_profile', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact');
            $table->string('owner_name');
            $table->text('address');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('state_id');
            $table->date('est_date');
            $table->text('image_url');
            $table->unsignedBigInteger('agency_id');
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('state')->onDelete('cascade');
            $table->foreign('agency_id')->references('id')->on('agency')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_profile');
    }
};
