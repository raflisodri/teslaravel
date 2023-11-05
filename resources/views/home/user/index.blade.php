@extends('layout.index')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ini Data User</h4> 
                            <br>
                          
                            <a href="/user/tambah" class="btn btn-info">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <table class="table" id="example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $u)
                                    <tr>
                                        <td>{{$u->id}}</td>
                                        <td>{{$u->name}}</td>
                                        <td>{{$u->username}}</td>
                                        <td>{{$u->level}}</td>
                                        <td>{{$u->created_at}}</td>
                                        <td>
                                            <a href="/user/edit/{{$u->id}}" class="btn btn-warning">Edit</a>
                                            <a href="#" class="btn btn-danger" onclick="Delete('/user/delete/{{$u->id}}')">Hapus</a> 
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