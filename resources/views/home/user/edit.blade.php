@extends('layout.index')
@section('content')
 
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Data User</h3>
                        </div>
                        <div class="card-body">
                            <form action="/user/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="my-input">Nama</label>
                                    <input id="my-input" value="{{$user->name}}" class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Username</label>
                                    <input id="my-input" value="{{$user->username}}" class="form-control" type="text" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Password</label>
                                    <input id="my-input" value="{{$user->password}}" class="form-control" type="password" name="password">
                                </div>
                               
                                <div class="form-group">
                                    <label for=" " class="form-label">Level</label>
                                    <select class="form-control" name="level" id="">
                                    <option value="admin">Admin</option>
                                    <option value="kasir">Kasir</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-info">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection