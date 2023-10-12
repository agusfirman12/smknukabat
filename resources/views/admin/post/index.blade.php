@extends('admin.dashboard')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h2>Berita SMK NU Kabat</h2>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive col-lg-10 rounded shadow py-3 px-3">
        <a href="/admin/post/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle pe-2"></i>Tambah Berita Baru</a>
        <table class="table table-sm align-middle text-center">
          <thead>
            <tr>
              <th scope="col">No</th> 
              <th scope="col">Foto</th>
              <th scope="col">Judul Berita</th>
              <th scope="col">Aksi</th>
            </tr>
            </tr>
          </thead>
          <tbody>
              @foreach ($posts as $post)                    
              <tr>
                <th>{{ $loop->iteration }}</th>
                @if ($post->photo)
                <td><img src="{{ asset('storage/'.$post->photo) }}" width="250px"></td>
                @else
                <td><img src="{{ asset('assets/img/news.png') }}" width="120" alt="" ></td>
                @endif
                <td>{{ $post->title }}</td>
                <td>
                  <a href="/admin/post/{{ $post->id }}" class="btn btn-info"><i class="bi bi-eye"></i></a>
                  <a href="/admin/post/{{ $post->id }}/edit"class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <form action="/admin/post/{{ $post->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Apakah Anda Yakin ?')"><i class="bi bi-trash"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    </div>
</div>
@endsection