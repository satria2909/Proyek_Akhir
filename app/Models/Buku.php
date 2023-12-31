<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    public $table = "buku";
    protected $primaryKey = "id";
    public $incrementing=false;
    protected $keyType="string";
    
    protected $fillable = ['id', 'judul', 'gambar', 'persediaan', 'pengarang', 'penerbit', 'created_at'];
}
