<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubInternationalProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_program_id',
        'title',
        'description',
        'image',
        'tag',
    ];

    /**
     * Relasi ke main program
     * Satu sub program hanya milik satu main program
     */
    public function mainProgram()
    {
        return $this->belongsTo(MainInternationalProgram::class, 'main_program_id');
    }
}
