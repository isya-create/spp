<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hubungan extends Model
{
    use HasFactory, SoftDeletes;

    // Specify the table associated with the model
    protected $table = 'hubungans';

    // Specify the primary key of the table
    protected $primaryKey = 'id';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'description',
    ];
}
