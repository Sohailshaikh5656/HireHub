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
        Schema::create('jobapplication', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("job_posting_id");
            $table->unsignedBigInteger("user_id");
            $table->string("status")->default("pending");
            $table->foreign("user_id")->references("id")->on("user")->onDelete("cascade");
            $table->foreign("job_posting_id")->references("id")->on("jobposting")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobapplication');
    }
};
