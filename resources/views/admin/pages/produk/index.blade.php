@extends('admin.master-admin')
@section('title', 'Data Produk')
@section('produk', 'active')
@section('main')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <a href="{{route('produk.create')}}" class="btn btn-primary">Tambahkan Produk</a>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{session('pesan')}}
                    </div>
                @endif
                @if (session('hapus'))
                <div class="alert alert-danger">
                    {{session('hapus')}}
                </div>
            @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Images</th>
                            <th>Nama Produk</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataProduk as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <img src="{{Storage::url($data->images)}}" alt="gambar" style="width: 150px;">
                                </td>
                                <td>{{$data->nama_produk}}</td>
                                <td>{{$data->deskripsi}}</td>
                                <td class="pt-3 d-flex">
                                    <a href="{{route('produk.edit', $data->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('produk.destroy', $data->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="15" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
