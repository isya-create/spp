<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasangan extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'pasangans';

    // Specify the primary key of the table
    protected $primaryKey = 'id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'id_pekerja',
        'nricpasangan',
        'namapasangan',
        'hubungan',
        'notel',
    ];
}
