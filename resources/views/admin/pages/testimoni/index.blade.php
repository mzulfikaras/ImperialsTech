@extends('admin.master-admin')
@section('title', 'Testimonial')
@section('testi','active')

@section('main')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <a href="{{ route('testi.create') }}" class="btn btn-primary">Tambah Client</a>
                </div>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                @if (session('hapus'))
                    <div class="alert alert-danger">
                        {{ session('hapus') }}
                    </div>
                @endif
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Deskripsi Testi</th>
                            <th>Nama Client</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataTesti as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td>{{ $data->client }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>

                                        <form action="{{ route('testi.destroy', $data->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{ route('testi.edit', $data->id) }}" class="btn btn-primary">Edit Data</a>

                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
