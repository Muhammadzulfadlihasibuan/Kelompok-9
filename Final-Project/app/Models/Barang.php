<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'Barang';
    
    protected $fillable = ['nama', 'stok', 'harga', 'pemasok_id'];

    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class);
    }
}

