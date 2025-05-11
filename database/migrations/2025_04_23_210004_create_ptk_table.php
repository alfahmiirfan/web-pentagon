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
        Schema::create('ptk', function (Blueprint $table): void {
            $table->uuid('id')->primary();

            $table->string('name', 255)->nullable();
            $table->string('nip', 18)->nullable();
            $table->string('position', 255)->nullable();
            $table->text('job')->nullable();
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
        Schema::dropIfExists('ptk');
    }
};
