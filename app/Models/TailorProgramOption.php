<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TailorProgramOption extends Model
{
    use HasFactory;

    protected $table = 'tailor_program_options';

    protected $fillable = [
        'tailor_program_id',
        'option_title',
        'option_description',
        'option_image',
    ];

    // Relasi: opsi milik satu TailorProgram
    public function MainTailor()
    {
        return $this->belongsTo(TailorProgram::class, 'tailor_program_id');
    }
}
