@extends('admin.master-admin')
@section('title', 'Edit Testimoni')
@section('testi','active')

@section('main')
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Edit Testimoni</h1>
                    <hr>
                    <form action="{{ route('testi.update', $testi->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="deskripsi">deskripsi :</label>
                        <textarea name="deskripsi" id="editor" class="form-control @error('deskripsi')is-invalid @enderror" cols="30" rows="10">{{ old('deskripsi', $testi->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="client">Nama Client :</label>
                        <input type="text" name="client" id="client" class="form-control @error('client')is-invalid @enderror" value="{{ old('client', $testi->client) }}">
                        @error('client')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan :</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan')is-invalid @enderror" value="{{ old('jabatan', $testi->jabatan) }}">
                        @error('jabatan')
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
