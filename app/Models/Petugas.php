<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Petugas extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'petugas';
    public $timestamps = false;

    protected $guarded = ['id'];

    protected $fillable = [
        'username',
        'nama',
        'password',
        'telp',
        'level',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function tanggapan():HasMany{
        return $this->hasMany(Tanggapan::class,'username','username');
    }
}
