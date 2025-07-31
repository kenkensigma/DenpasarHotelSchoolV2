<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Program extends Model
{
    use HasFactory;

    protected $table = 'programs'; // Nama tabel di database
    protected $fillable = ['name', 'duration', 'description', 'image'];

    public function category()
{
    return $this->belongsTo(ProgramCategory::class, 'category_id');
}

}
