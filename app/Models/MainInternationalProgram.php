<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainInternationalProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'tag',
    ];

    /**
     * Relasi ke sub program
     * Satu main program bisa punya banyak sub program
     */
    public function subPrograms()
    {
        return $this->hasMany(SubInternationalProgram::class, 'main_program_id');
    }
}
