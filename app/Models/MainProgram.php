<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainProgram extends Model
{
    use HasFactory;

    protected $table = 'main_programs';

    protected $fillable = [
        'title', 'description', 'front_image', 'sub_title', 'sub_description', 'back_image',
    ]; 
}
