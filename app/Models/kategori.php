<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang'];
    protected $visible = ['nama_barang'];
    public $timestamps = true;

    public function barang()
    {
        //data Model 'destinasi' bisa dimiliki oleh Model 'Author'
        //melalui fk "wisata-id"
        return $this->hasMany('App\Models\kategori', 'id_kategori');
    }
}
