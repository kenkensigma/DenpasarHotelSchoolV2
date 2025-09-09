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
        Schema::create('in_house_programs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sub_reason_title');
            $table->string('sub_reason_description'); 
            $table->string('target_audience_description');
            $table->string('program_title');
            $table->string('program_duration');
            $table->string('program_description');
            $table->string('program_image');
            $table->string('highlights_title');
            $table->string('highlights_description');
            $table->string('program_delivery_title');
            $table->string('program_delivery_description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('in_house_programs');
    }
};
