<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InHouseProgram extends Model
{
    protected $table = "in_house_programs";
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
        'program_delivery_title',
        'program_delivery_description'
    ];
}
