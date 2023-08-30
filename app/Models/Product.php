<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'id_produk',
        'camera',
        'harga',
        'jumlah',
        'describe'
    ];
    public $incrementing = false;
}
