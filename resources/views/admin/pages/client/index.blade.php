@extends('admin.master-admin')
@section('title', 'Client')
@section('client','active')

@section('main')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <a href="{{ route('client.create') }}" class="btn btn-primary">Tambah Client</a>
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
                            <th>Project</th>
                            <th>Nama Client</th>
                            <th>Awal Kontrak</th>
                            <th>Akhir Kontrak</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataClient as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->project }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->awal_kontrak }}</td>
                                <td>{{ $data->akhir_kontrak }}</td>
                                <td>

                                        <form action="{{ route('client.destroy', $data->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <a href="{{ route('client.edit', $data->id) }}" class="btn btn-primary">Edit Data</a>
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
