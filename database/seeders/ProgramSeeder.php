<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        // Tambah kategori
        $categories = [
            "National Programs",
            "International Program",
            "Tailor-Made Program for Hospitality",
            "In-House Training Program"
        ];

        $categoryIds = [];
        foreach ($categories as $category) {
            $categoryIds[$category] = DB::table('program_categories')->insertGetId([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Tambah program
        $programs = [
            // National Programs
            ["category_id" => $categoryIds["National Programs"], "name" => "3-Month Hospitality Programs", "duration" => "3 Months", "description" => "..."],
            ["category_id" => $categoryIds["National Programs"], "name" => "6-Month Hospitality Programs", "duration" => "6 Months", "description" => "..."],
            ["category_id" => $categoryIds["National Programs"], "name" => "1-Year Hospitality Programs", "duration" => "1 Year", "description" => "..."],
            ["category_id" => $categoryIds["National Programs"], "name" => "2-Year Hospitality Programs", "duration" => "2 Years", "description" => "..."],

            // International Programs
            ["category_id" => $categoryIds["International Program"], "name" => "Dual Certification Program with Australian Hospitality Schools", "duration" => "-", "description" => "..."],
            ["category_id" => $categoryIds["International Program"], "name" => "German Ausbildung Program", "duration" => "2 to 3 Years", "description" => "..."],
            ["category_id" => $categoryIds["International Program"], "name" => "Short-Term Study Abroad Program in Australia", "duration" => "3 to 6 Months", "description" => "..."],
            ["category_id" => $categoryIds["International Program"], "name" => "International Culinary Exchange Program with European Schools", "duration" => "1 Year", "description" => "..."],
            ["category_id" => $categoryIds["International Program"], "name" => "Hospitality Management Internship Program", "duration" => "6 to 12 Months", "description" => "..."],

            // Tailor-Made Program
            ["category_id" => $categoryIds["Tailor-Made Program for Hospitality"], "name" => "Tailor-Made Program for Hospitality", "duration" => "-", "description" => "..."],

            // In-House Training
            ["category_id" => $categoryIds["In-House Training Program"], "name" => "In-House Training Program", "duration" => "-", "description" => "..."],
        ];

        // Insert data program ke database
        DB::table('programs')->insert($programs);
    }
}