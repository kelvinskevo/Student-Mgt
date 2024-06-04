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
        Schema::dropIfExists('students');

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("mobile");
            $table->string("email");
            $table->date("dob");
            $table->string("gender");
            $table->string("admission_number")->unique();
            $table->string("class");
            $table->string("religion")->nullable();
            $table->string("blood_group")->nullable();
            $table->enum("status", ["active", "inactive"])->default("active");
            $table->string("profile_pic")->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
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
