@extends('admin.dashboard')

@section('main')
<div class="container border-bottom">
    <div class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2">
        <div class="col-9">
            <h2>{{ $announcement->title }}</h2>
        </div>
        <div class="col">
            <a href="/admin/announcement" class="btn btn-success"><i class="bi bi-arrow-left"></i>Kembali</a>
            <a href="/admin/announcement/{{ $announcement->id }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
            <form action="/admin/announcement/{{ $announcement->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')"><i class="bi bi-trash"></i>Hapus</button>
              </form>
        </div>
    </div>
</div>
<div class="container pt-3">
    <img src="{{ asset('storage/'.$announcement->photo) }}" width="50%">
    {!! $announcement->annoucment_fill !!}
</div>
@endsection