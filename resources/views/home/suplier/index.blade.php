@extends('layout.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Ini Data Suplier</h3>
                                <a href="suplier/tambah" class="btn btn-info">Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table" id="example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Nama Perusahaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suplier as $s)                                    
                                        <tr>
                                            <td>{{$s->id}}</td>
                                            <td>{{$s->nama}}</td>
                                            <td>{{$s->alamat}}</td>
                                            <td>{{$s->nama_perusahaan}}</td>
                                            <td>
                                                <a href="suplier/edit/{{$s->id}}" class="btn btn-warning">Edit</a>
                                                <a href="suplier/delete/{{$s->id}}" class="btn btn-danger">Hapus</a>
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