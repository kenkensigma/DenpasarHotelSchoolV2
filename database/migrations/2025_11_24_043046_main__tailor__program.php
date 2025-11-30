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
        Schema::create('tailor_programs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('reason_main')->nullable();
            $table->string('sub_reason_title')->nullable();
            $table->text('sub_reason_description')->nullable();
            $table->string('icon_target_audience')->nullable();
            $table->text('description_target_audience')->nullable();
            $table->string('highlights_title')->nullable();
            $table->text('highlights_description')->nullable();
            $table->string('career_icon')->nullable();
            $table->text('career_description')->nullable();
            $table->decimal('price')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tailor_programs');
    }
};
