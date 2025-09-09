<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HourlyBasedProgram extends Model
{
    protected $table = "hourly_based_programs";
    protected $fillable = [
        'sub_reason_title',
        'sub_reason_description',
        'target_audience_description',
        'program_title',
        'program_duration',
        'program_description',
        'program_image',
        'highlights_title',
        'highlights_description'
    ];
}
