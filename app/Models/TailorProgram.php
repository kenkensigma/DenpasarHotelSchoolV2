<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TailorProgram extends Model
{
    protected $table = "tailor_programs";
    protected $fillable = [
        'sub_reason_title',
        'sub_reason_description',
        'target_audience_description',
        'program_title',
        'program_duration',
        'program_description',
        'program_image',
        'highlights_title',
        'highlights_description',
        'career_pathways_description'
    ];
}
