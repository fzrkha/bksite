<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pelanggaran extends Model
{
    use HasFactory;
    
    protected $table = 'pelanggaran';
    public $timestamps = false;

    protected $guarded = ['id'];

    protected $casts = ['tgl_pelanggaran' => 'date',];

    public function tanggapan():HasOne{
        return $this->hasOne(Tanggapan::class,'id_pelanggaran','id_pelanggaran');
    }

    public function siswa():BelongsTo{
        return $this->belongsTo(Siswa::class,'nis','nis');
    }
}
