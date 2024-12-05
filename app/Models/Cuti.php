<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuti extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_pekerjas',
        'tahun',
        'jenis_cuti',
        'jum_cutibersalin',
        'date_mulacuti',
        'date_tamatcuti',
        'jumcuti',
        'bil_cutidipohon',
        'bakicuti',
        'bakikehadapan',
        'status_permohonan',
        'dokumen',
    ];

    public function pekerja()
    {
        return $this->belongsTo(Pekerja::class, 'id_pekerjas');
    }
}
