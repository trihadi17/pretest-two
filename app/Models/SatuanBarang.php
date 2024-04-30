<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SatuanBarang extends Model
{
    use HasFactory;
    protected $table = 'satuan_barang';
    protected $fillable = [
        'kode',
        'nama',
    ];

    public $timestamps = false;
}
