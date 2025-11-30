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
        Schema::create('tailor_program_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tailor_program_id')
                ->constrained('tailor_programs')
                ->onDelete('cascade'); // kalau program dihapus, semua option ikut terhapus
            $table->string('option_title');
            $table->text('option_description')->nullable();
            $table->string('option_image')->nullable(); // simpan path file
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tailor_program_options');
    }
};
