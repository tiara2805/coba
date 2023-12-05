<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table = "barang";
    protected $primaryKey = "id";
    protected $guarded =[];
    protected $fillable =[
       'id', 'nama_barang','harga_barang','stok'
    ];

    public function transaksi()
    {
        return $this->hasMany(transaksi::class,'id');
    }
}
