<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    use HasFactory;

    protected $table = 'teams'; // Nama tabel di database
    protected $fillable = ['nama', 'roles', 'desc', 'foto', 'cv', 'status'];

}
