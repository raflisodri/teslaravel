@extends('layout.index')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                            <h3>Ini Data Barang</h3>
                            <br>
                            <a href="barang/tambah" class="btn btn-info">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Suplier</th>
                                        <th>Nama</th>
                                        <th>Stok</th>
                                        <th>Jenis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $b)   
                                   <tr>
                                        <td>{{$b->id}}</td>
                                        <td>{{$b->Suplier->nama}} - {{$b->Suplier->nama_perusahaan}}</td>
                                        <td>{{$b->nama}}</td>
                                        <td>{{$b->stok}}</td>
                                        <td>{{$b->jenis}}</td>
                                        <td>
                                            <a href="#" class="btn btn-danger" onclick="Delete('barang/delete/{{$b->id}}')">Hapus</a>
                                            <a href="barang/update/{{$b->id}}" class="btn btn-warning">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection