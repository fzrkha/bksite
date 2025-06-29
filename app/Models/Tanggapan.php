<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tanggapan extends Model
{
    use HasFactory;

    protected $table = 'tanggapan';
    public $timestamps = false;

    protected $guarded = ['id'];

    protected $casts = ['tgl_tanggapan' => 'date',];

    public function pelanggaran():BelongsTo{
        return $this->belongsTo(Pelanggaran::class,'id_pelanggaran','id_pelanggaran');
    }

    public function petugas():BelongsTo{
        return $this->belongsTo(Petugas::class,'username','username');
    }
}
