<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahMakan extends Model
{
    use HasFactory;

    protected $table = 'rumah_makans';

    protected $fillable = [
        'nama',
        'lokasi',
        'rating',
        'jadwal'
    ];
}
