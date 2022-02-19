@extends('adminlte::page')

@section('tittle','Dasboard')

@section('content_header')

product category page

@endsection



@section('css')
 <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
  <script src="{{ asset('DataTables/datatables.min.css') }}"></script>
  <script>
      $(document).ready(function() {
          $('#example').DataTable();
      });
      </script>
@endsection

@section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <a href="{{route('stockbarang.create')}}" class="btn btn-sm btn-primary float-right">Tambah Kategori</a>
                </div>

                 <div class="card-body">
                        inventaris olilab
                    <div class="table-responsive">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>nomor</th>
                                    <th>id</th>
                                    <th>nama barang masuk</th>
                                     <th>nama barang keluar</th>
                                      <th>jumlah</th>
                                    <th><center>Aksi</center></th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stock_barang as $data)
                                @php $no=1; @endphp
                            <tr>
                                <th>{{$no++}}</th>
                                <th>{{$data->id_stock}}</th>
                                <th>{{$data->nama_barangmasuk}}</th>
                                 <th>{{$data->nama_barangkeluar}}</th>
                                  <th>{{$data->jumlah}}</th>
                                <th>
                                    <form action="{{route('stockbarang.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('stockbarang.edit',$data->id)}}" class="btn btn-info">Edit</a>
                                        <a href="{{route('stockbarang.show',$data->id)}}" class="btn btn-warning">Show</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                    </th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
