<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {

        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('duration');
            $table->text('description')->nullable();
            $table->enum('category', ['National', 'International', 'Tailor-Made', 'In-House-Program', 'Hourly-Based'])->default('National');
            $table->string('status')->default('1'); // 0 = draft, 1 = published
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
