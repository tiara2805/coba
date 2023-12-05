<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class kasir extends Authenticatable
{
    protected $table = "kasir";
    protected $primaryKey = "id";
    protected $guarded =['id'];

    public function transaksi()
    {
        return $this->hasMany(transaksi::class,'id');
    }
}
