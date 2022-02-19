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
                 <div class="card-header">{{ _('OLI LAB') }}</div>

                 <div class="card-body">
                        inventaris olilab
                    <div class="table-responsive">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>nama barang</th></th>
                                    <th>nama peminjam</th>
                                    <th>spesifikasi</th>
                                    <th>kegunaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach() --}}
                                <tr>
                                    <td>isi kolom 1</td>
                                    <td>isi kolom 2</td>
                                    <td>isi kolom 3</td>
                                    <th>isi kolom 4</th>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                </div>
                end data table
            </div>
        </div>
    </div>
</div>
@endsection
