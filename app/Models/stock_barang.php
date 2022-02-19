<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_barang extends Model
{
    use HasFactory;
    protected $fillable = ['id_stock,nama_barang,jumlah'];
    protected $visible = ['id_stock,nama_barang,jumlah'];
    public $timestamps = true;

    public function barang()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->hasMany('App\Models\stock_barang', 'id_stock');
    }
}
