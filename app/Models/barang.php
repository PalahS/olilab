<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['id_barang', 'nama_barang', 'id_stok', 'id_kategori'];
    protected $visible = ['id_barang', 'nama_barang', 'id_stok', 'id_kategori'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo('App\Models\kategori', 'id_kategori');
    }
}
