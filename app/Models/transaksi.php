<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = "id";
    protected $guarded =[];

    public function barang()
    {
        return $this->belongsTo(barang::class,'idbarang');
    }

    public function kasir()
    {
    return $this->belongsTo(kasir::class,'idkasir');

}
}
