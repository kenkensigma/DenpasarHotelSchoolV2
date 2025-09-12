<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainNationalProgram extends Model
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
        return $this->hasMany(SubNationalProgram::class, 'main_program_id');
    }
}
