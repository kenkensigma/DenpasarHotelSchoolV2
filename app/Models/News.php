<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news'; // Nama tabel di database
    protected $fillable = [
        'category', 'date', 'title', 'content', 'photo',
        'caption_image', 'tags', 'keyword', 'hit', 'status'
    ];
}


