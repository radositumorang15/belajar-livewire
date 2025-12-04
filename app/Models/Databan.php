<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Databan extends Model
{
    protected $table = 'databan';

    protected $fillable = [
        'nama_ban',
        'harga',
        'merk',
    ];
}

