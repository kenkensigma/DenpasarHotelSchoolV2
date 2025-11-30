<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TailorProgram extends Model
{
    use HasFactory;

    protected $table = 'tailor_programs';

    protected $fillable = [
        'title',
        'subtitle',
        'reason_main',
        'sub_reason_title',
        'sub_reason_description',
        'icon_target_audience',
        'description_target_audience',
        'highlights_title',
        'highlights_description',
        'career_icon',
        'career_description',
        'price',
    ];

    // Relasi: 1 TailorProgram punya banyak TailorProgramOption
    public function SubTailor()
    {
        return $this->hasMany(TailorProgramOption::class);
    }
}
