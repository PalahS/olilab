<?php

namespace App\Http\Controllers;

use App\Models\stock_barang;
use Illuminate\Http\Request;

class StockBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stock_barang = stock_barang::all();
        return view('stockbarang.index', compact('stock_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stockbarang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_stock' => 'required',
            'nama_barangmasuk' => 'required',
            'nama_barangkeluar' => 'required',
            'jumlah' => 'required',
        ]);

        $stock_barang = new stock_barang;
        $stock_barang->id_stock = $request->id_stock;
        $stock_barang->nama_barangmasuk = $request->nama_barangmasuk;
        $stock_barang->nama_barangkeluar = $request->nama_barangkeluar;
        $stock_barang->jumlah = $request->jumlah;
        $stock_barang->save();
        return redirect()->route('stockbarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stock_barang  $stock_barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stock_barang = stock_barang::findOrFail($id);
        return view('stockbarang.show', compact('stock_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stock_barang  $stock_barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stock_barang = stock_barang::findOrFail($id);
        return view('stockbarang.edit', compact('stock_barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stock_barang  $stock_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_barangmasuk' => 'required',
            'nama_barangkeluar' => 'required',
            'jumlah' => 'required',
        ]);

        $stock_barang = new stock_barang;
        $stock_barang->id_stock = $request->id_stock;
        $stock_barang->nama_barangmasuk = $request->nama_barangmasuk;
        $stock_barang->nama_barangkeluar = $request->nama_barangkeluar;
        $stock_barang->jumlah = $request->jumlah;
        $stock_barang->save();
        return redirect()->route('stockbarang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stock_barang  $stock_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock_barang = stock_barang::findOrFail($id);
        $stock_barang->delete();
        return redirect()->route('stockbarang.index');
    }
}
