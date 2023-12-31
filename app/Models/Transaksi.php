<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $table = "transaksi";
    protected $primaryKey = "id";
    public $incrementing=false;
    protected $keyType="string";
    
    protected $fillable = ['id', 'id_buku', 'id_pelanggan', 'jumlah', 'total_harga', 'created_at'];
}
