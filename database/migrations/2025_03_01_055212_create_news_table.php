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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->date('date');
            $table->string('title');
            $table->string('content');
            $table->string('caption_image');
            $table->string('tags');
            $table->string('keyword');
            $table->integer('hit');
            $table->boolean('status')->default(1);
            $table->string('photo')->default('noimage.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
