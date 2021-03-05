@extends('admin.master-admin')
@section('title', 'Create Client')
@section('client','active')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Tambah Client</h1>
            <hr>
            <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="project">Project :</label>
                    <input type="text" name="project" id="project" class="form-control @error('project')is-invalid @enderror" value="{{ old('project') }}" placeholder="Conteh: Website Development, Google Ads, Facebook Ads, dll">
                    @error('project')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Client :</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama')is-invalid @enderror" value="{{ old('nama') }}">
                    @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="awal_kontrak">Awal Kontrak :</label>
                    <input type="date" name="awal_kontrak" id="awal_kontrak" class="form-control @error('awal_kontrak')is-invalid @enderror" value="{{ old('awal_kontrak') }}">
                    @error('awal_kontrak')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="akhir_kontrak">Akhir Kontrak :</label>
                    <input type="date" name="akhir_kontrak" id="akhir_kontrak" class="form-control @error('akhir_kontrak')is-invalid @enderror" value="{{ old('akhir_kontrak') }}">
                    @error('akhir_kontrak')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </form>
        </div>
    </div>
@endsection
