@extends('adminlte::page')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambahkan Data</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">stock_barang</div>
                <div class="card-body">
                    <form action="{{route('stockbarang.store')}}" method="post" >
                        @csrf

                        <div class="form-group">
                            <label for="">id</label>
                            <input type="number" name="id_stock" class="form-control @error('id_stock') is-invalid @enderror">
                            @error('id_stock')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                         <div class="form-group">
                            <label for="">nama barang masuk</label>
                            <input type="text" name="nama_barangmasuk" class="form-control @error('nama_barang_masuk') is-invalid @enderror">
                            @error('nama_barangmasuk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">nama barang keluar</label>
                            <input type="text" name="nama_barangkeluar" class="form-control @error('nama_barang_keluar') is-invalid @enderror">
                            @error('nama_barangkeluar')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">jumlah</label>
                            <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror">
                            @error('jumlah')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
