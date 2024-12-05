<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heir extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'heirs';

    // Specify the primary key of the table
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_pekerja',
        'namawaris',
        'alamat',
        'hubungan',
        'notel',
    ];
}