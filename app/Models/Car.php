<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'car';
    protected $primaryKey = 'id_car';
    
    // Tambahkan baris di bawah ini
    public $timestamps = false; 

    protected $fillable = [
        'merek',
        'warna',
        'tahun',
        'harga',
        'no_plat',
        'gambar'
    ];
}