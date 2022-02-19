<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;

class Apicontroller extends Controller
{
    public function index()
    {
        $kategori = kategori::all();
        return response()->json([
            'succes' => true,
            'message' => 'list kategori',
            'data' => $kategori,
        ], 200);

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
        ]);

        $kategori = new kategori;
        $kategori->nama_barang = $request->nama_barang;
        $kategori->save();
        return response()->json([
            'succes' => true,
            'message' => 'list kategori',
            'data' => $kategori,
        ], 200);

    }

    public function show($id)
    {
        $kategori = kategori::find($id);
        return response()->json([
            'succes' => true,
            'message' => 'list kategori',
            'data' => $kategori,
        ], 200);

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->nama_barang = $request->nama_barang;
        $kategori->save();
        return response()->json([
            'succes' => true,
            'message' => 'list kategori',
            'data' => $kategori,
        ], 200);

    }
}
