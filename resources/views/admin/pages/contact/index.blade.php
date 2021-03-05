@extends('admin.master-admin')
@section('title','Contact Us')
@section('contact','active')

@section('main')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            @if (session('hapus'))
                <div class="alert alert-danger">
                    {{ session('hapus') }}
                </div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dataContact as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->pesan }}</td>
                            <td>
                                <form action="{{route('contact.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <td colspan="6" class="text-center">Data kosong</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
