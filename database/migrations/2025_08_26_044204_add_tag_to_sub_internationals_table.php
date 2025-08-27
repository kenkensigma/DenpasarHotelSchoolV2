<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('sub_international_programs', function (Blueprint $table) {
            $table->string('tag')->nullable()->after('image'); 
        });
    }

    public function down(): void
    {
        Schema::table('sub_internationals_programs', function (Blueprint $table) {
            $table->dropColumn('tag');
        });
    }
};
