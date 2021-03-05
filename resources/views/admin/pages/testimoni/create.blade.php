@extends('admin.master-admin')
@section('title', 'Create Testimoni')
@section('testi','active')

@section('main')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Tambah Testimoni</h1>
            <hr>
            <form action="{{ route('testi.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="deskripsi">Deskripsi :</label>
                    <textarea name="deskripsi" id="editor" class="form-control @error('deskripsi')is-invalid @enderror" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="client">Nama Client :</label>
                    <input type="text" name="client" id="client" class="form-control @error('client')is-invalid @enderror" value="{{ old('client') }}">
                    @error('client')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jabatan">Jabatan :</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan')is-invalid @enderror" value="{{ old('jabatan') }}">
                    @error('jabatan')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Simpan</button>
            </form>
        </div>
    </div>
@endsection
