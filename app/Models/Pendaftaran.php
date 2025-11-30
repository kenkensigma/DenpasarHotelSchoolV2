<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'murid_pendaftaran';
    protected $fillable = [
        'nama_lengkap',
        'asal_sekolah',
        'tanggal_lahir',
        'gender',
        'alamat',
        'nomor_ponsel',
        'email',
        'bukti_pembayaran',
        'sosmed',
        'status',
    ];
}
