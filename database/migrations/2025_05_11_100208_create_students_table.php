<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table): void {
            $table->uuid('id')->primary();

            $table->string('name', 255)->nullable();
            $table->string('nisn', 10)->nullable();
            $table->string('birth_place', 255)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('phone', 25)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('generation', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->enum('gender', [
                Student::GENDER_FEMALE,
                Student::GENDER_MALE,
            ])->nullable();
            $table->text('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
