@extends('admin.master-admin')
@section('title', 'Report')
@section('report','active')

@section('main')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-4">
                    <a href="{{ route('report.create') }}" class="btn btn-primary">Tambah Report</a>
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
                            <th>Nama Client</th>
                            <th>Tanggal Report</th>
                            <th>Websit Desc</th>
                            <th>Google Ads Desc</th>
                            <th>Facebook Ads Desc</th>
                            <th>Instagram Ads Desc</th>
                            <th>Sosial Media Desc</th>
                            <th>Youtube Desc</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dataReport as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->client->nama }}</td>
                                <td>{{ $data->tgl_report }}</td>
                                <td>{!! $data->website_desc !!}</td>
                                <td>{!! $data->google_desc !!}</td>
                                <td>{!! $data->fb_desc !!}</td>
                                <td>{!! $data->ig_desc !!}</td>
                                <td>{!! $data->sosmed_desc !!}</td>
                                <td>{!! $data->yt_desc !!}</td>
                                <td>

                                    <form action="{{ route('report.destroy', $data->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                        <a href="{{ route('report.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{route('report.print', $data->id) }}" class="btn btn-secondary">Print Report</a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Data kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
