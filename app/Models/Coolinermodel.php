<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coolinermodel extends Model
{
    use HasFactory;
    protected $table = 'cooliner_table';

    protected $fillable = [
        'nama',
        'asal_daerah',
        'deskripsi'
    ];
}
