@extends('layout.index')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                           
                                <h3>Tambah Data Barang</h3>
                            </div>
                            <div class="card-body">
                                <form action="/barang/simpan" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="my-input">Suplier</label>
                                        <select name="id_suplier" id="" class="form-control">
                                            <option value="" disabled>Pilih satu</option>
                                            @foreach ($suplier as $suplier)
                                            <option value="{{$suplier->id}}">{{$suplier->nama}} - {{$suplier->nama_perusahaan}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                <div class="form-group">
                                    <label for="my-input">Nama</label>
                                    <input id="my-input" class="form-control" type="text" name="nama">
                                    @error('nama')
                                    <div class="alert alert-danger alert-dismisible fade show " role="alert" data-dismiss="alert" >{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Stok</label>
                                    <input id="my-input" class="form-control" type="number" name="stok">
                                    @error('stok')
                                    <div class="alert alert-danger alert-dismisible fade show" role="alert" data-dismiss="alert">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Jenis</label>
                                    <input id="my-input" class="form-control" type="text" name="jenis">
                                    @error('jenis')
                                        <div class="alert alert-danger alert-dismisiable fade show" role="alert" data-dismiss="alert">{{$message}}</div>
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