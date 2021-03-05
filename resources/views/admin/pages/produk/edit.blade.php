@extends('admin.master-admin')
@section('title', 'Form Produk')
@section('produk', 'active')
@section('main')
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Update Produk</h1>
            <hr>
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="images">Gambar produk</label>
                    <input type="file" name="images" id="images" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama_produk">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama_produk"  class="form-control @error('nama_produk') is-invalid @enderror" value="{{old('nama_produk', $produk->nama_produk)}}">
                    @error('nama_produk')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="{{old('deskripsi', $produk->deskripsi)}}">
                    @error('deskripsi')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
