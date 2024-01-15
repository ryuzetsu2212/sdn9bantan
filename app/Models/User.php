<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Artikel;
use App\Models\Pengumuman;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nip',
        'kelahiran',
        'pangkat',
        'pendidikan',
        'jabatan',
        'level',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * A user may have many articles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    // Di dalam model User (app/Models/User.php)

    public function isAdmin()
    {
        return $this->level === 'admin'; // Ubah kondisi ini sesuai dengan cara Anda menandai admin di dalam aplikasi
    }

    public function articles()
    {
        return $this->hasMany(Artikel::class);
    }

    /**
     * A user may have many announcements.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function announcements()
    {
        return $this->hasMany(Pengumuman::class);
    }
}
