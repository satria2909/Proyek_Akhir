<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    public $table = "pelanggan";
    protected $primaryKey = "id";
    public $incrementing=false;
    protected $keyType="string";
    
    protected $fillable = ['id', 'nama', 'alamat', 'telpon', 'email', 'created_at'];
}
