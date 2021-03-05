@extends('admin.master-admin')
@section('title', 'Edit Report')
@section('report','active')

@section('main')
        <div class="container bg-white">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Edit Report</h1>
                    <hr>
                    <form action="{{ route('report.update', $report->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="client_id">Nama Client :</label>
                        <select name="client_id" id="client_id"  class="form-control">
                            @foreach ($client as $c)
                                <option value="{{$c->id}}" {{(old('client_id') ?? $report->client_id == $c->id) ? 'selected' : ''}}>
                                    {{ $c->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('client_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tgl_report">Tanggal Report :</label>
                        <input type="date" name="tgl_report" id="tgl_report" class="form-control @error('tgl_report') is-invalid @enderror" value="{{ old('tgl_report', $report->tgl_report) }}">
                        @error('tgl_report')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website_desc">Website Ads Desc :</label>
                        <textarea name="website_desc" class="form-control @error('website_desc')is-invalid @enderror" id="editor1" cols="30" rows="10">{{old('website_desc', $report->website_desc)}}</textarea>
                        @error('website_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="google_desc">Google Ads Desc :</label>
                        <textarea name="google_desc" class="form-control @error('google_desc')is-invalid @enderror" id="editor2" cols="30" rows="10">{{old('google_desc', $report->google_desc)}}</textarea>
                        @error('google_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fb_desc">Facebook Ads Desc :</label>
                        <textarea name="fb_desc" class="form-control @error('fb_desc')is-invalid @enderror" id="editor3" cols="30" rows="10">{{old('fb_desc', $report->fb_desc)}}</textarea>
                        @error('fb_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ig_desc">Instagram Ads Desc :</label>
                        <textarea name="ig_desc" class="form-control @error('ig_desc')is-invalid @enderror" id="editor4" cols="30" rows="10">{{old('ig_desc', $report->ig_desc)}}</textarea>
                        @error('ig_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sosmed_desc">Sosial Media Ads Desc :</label>
                        <textarea name="sosmed_desc" class="form-control @error('sosmed_desc')is-invalid @enderror" id="editor5" cols="30" rows="10">{{old('sosmed_desc', $report->sosmed_desc)}}</textarea>
                        @error('sosmed_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="yt_desc">Youtube Desc :</label>
                        <textarea name="yt_desc" class="form-control @error('yt_desc')is-invalid @enderror" id="editor6" cols="30" rows="10">{{old('yt_desc', $report->yt_desc)}}</textarea>
                        @error('yt_desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
        CKEDITOR.replace( 'editor4' );
        CKEDITOR.replace( 'editor5' );
        CKEDITOR.replace( 'editor6' );
    </script>
@endsection
