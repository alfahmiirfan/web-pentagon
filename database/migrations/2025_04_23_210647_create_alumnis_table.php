<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnis', function (Blueprint $table): void {
            $table->uuid('id')->primary();

            $table->string('name', 255)->nullable();
            $table->year('year')->nullable();
            $table->string('class', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->string('job_place', 255)->nullable();
            $table->string('position', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('phone', 25)->nullable();
            $table->text('description')->nullable();
            $table->text('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
