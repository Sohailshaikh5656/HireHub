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
        Schema::create('agency_certificate', function (Blueprint $table) {
            $table->id();
            $table->string("certificate_name");
            $table->date("Year");
            $table->text("description");
            $table->string("image_url");
            $table->unsignedBigInteger("agency_id");
            $table->timestamps();
            $table->foreign("agency_id")->references("id")->on("agency")->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_certificate');
    }
};
