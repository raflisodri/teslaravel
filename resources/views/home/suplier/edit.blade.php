@extends('layout.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Edit data Suplier
                            </div>
                            <div class="card-body">
                                <form action="/suplier/update/{{$suplier->id}}" method="post">
                                    @csrf
                                <div class="form-group">
                                    <label for="my-input">Nama</label>
                                    <input id="my-input" class="form-control" value="{{$suplier->nama}}" type="text" name="nama">
                                    @error('nama')
                                        <div class="alert alert-danger alert-dismisible fade show" role="alert" data-dismiss="alert">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Alamat</label>
                                    <input id="my-input" class="form-control" value="{{$suplier->alamat}}" type="text" name="alamat">
                                    @error('alamat')
                                        <div class="alert alert-danger alert-dismisible fade show" role="alert" data-dismiss="alert">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Nama Perusahaan</label>
                                    <input id="my-input" class="form-control" type="text" value="{{$suplier->nama_perusahaan}}" name="nama_perusahaan">
                                    @error('nama_perusahaan')
                                        <div class="alert alert-danger alert-dismisible fade show" role="alert" data-dismiss="alert">{{$message}}</div>
                                    @enderror
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