<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    protected $table = 'gudangs';

    protected $fillable = [
        'kode',
        'nama',
        'status',
    ];
}