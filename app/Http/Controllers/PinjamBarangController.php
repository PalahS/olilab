<?php

namespace App\Http\Controllers;

use App\Models\pinjam_barang;
use Illuminate\Http\Request;

class PinjamBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjambarang = pinjam_barang::all();
        return view('pinjambarang.index', compact('pinjambarang'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pinjam_barang  $pinjam_barang
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam_barang $pinjam_barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pinjam_barang  $pinjam_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(pinjam_barang $pinjam_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pinjam_barang  $pinjam_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pinjam_barang $pinjam_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pinjam_barang  $pinjam_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(pinjam_barang $pinjam_barang)
    {
        //
    }
}
