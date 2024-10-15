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
        Schema::create('certificate', function (Blueprint $table) {
            $table->id();
            $table->string("certificate_name");
            $table->text("description")->nullable();
            $table->date("completion_date")->nullable(); // Nullable if appropriate
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("user_id")->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate');
    }
};
