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
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('contact');
            $table->date('DOB');
            $table->text('address');
            $table->string('gender');
            
            // Use integer to match the referenced int columns
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('user_id');
            
            $table->text('ImageUrl');
            
            // Foreign key definitions
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('state')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
