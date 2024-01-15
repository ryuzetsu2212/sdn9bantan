<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas',
        'jam_ke',
        'waktu',
        'senin',
        'selasa',
        'rabu',
        'kamis',
        'jumat',
        'sabtu',
    ];

    protected $table = 'jadwal_pelajaran';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
