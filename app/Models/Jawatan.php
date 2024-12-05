<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jawatan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'jawatans';

    protected $primaryKey = 'id_pekerja';

    protected $fillable = [
        'date_lapordiri',
        'date_tempohcubaan',
        'id_departments',
        'jawatan',
        'salary',
        'id_banks',
        'noakaun',
        'noepf',
        'nosocso',
        'jumlahcuti',
    ];

    protected $dates = ['deleted_at'];

    // Relations (contoh)
    // public function department()
    // {
    //     return $this->belongsTo(Department::class, 'id_departments');
    // }

    // public function bank()
    // {
    //     return $this->belongsTo(Bank::class, 'id_banks');
    // }
}
