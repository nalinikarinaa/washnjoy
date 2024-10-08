<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    use HasFactory;
    protected $table = 'laundry';
    protected $fillable = [
        'nama',
        'notelepon',
        'tanggalordermasuk',
        'jenispaket',
        'alamat',
        'keterangan',
        'tanggalorderkeluar',
        'berat',
        'harga',
        'buktipembayaran',
        'status',
        'pengiriman',
    ];
}
