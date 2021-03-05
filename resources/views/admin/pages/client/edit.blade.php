@extends('admin.master-admin')
@section('title', 'Edit Client')
@section('client','active')

@section('main')
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Edit Client</h1>
                    <hr>
                    <form action="{{ route('client.update', $client->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label for="project">Project :</label>
                            <input type="text" name="project" id="project" class="form-control @error('project')is-invalid @enderror" value="{{ old('project') ?? $client->project }}">
                            @error('project')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Client :</label>
                            <input type="text" name="nama" id="nama" class="form-control @error('nama')is-invalid @enderror" value="{{ old('nama') ?? $client->nama }}">
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="awal_kontrak">Awal Kontrak :</label>
                            <input type="date" name="awal_kontrak" id="awal_kontrak" class="form-control @error('awal_kontrak') is-invalid @enderror" value="{{ old('awal_kontrak') ?? $client->awal_kontrak }}" placeholder="BOLEH DIKOSONGKAN">
                            @error('awal_kontrak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="akhir_kontrak">Akhir Kontrak :</label>
                            <input type="date" name="akhir_kontrak" id="akhir_kontrak" class="form-control @error('akhir_kontrak') is-invalid @enderror" value="{{ old('akhir_kontrak') ?? $client->akhir_kontrak }}" placeholder="BOLEH DIKOSONGKAN">
                            @error('akhir_kontrak')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
