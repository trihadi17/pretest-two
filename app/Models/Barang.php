<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kd_kategori',
        'kd_satuan',
        'kode',
        'nama',
        'jumlah',
        'id_user_insert',
    ];

    public $timestamps = false;
}
