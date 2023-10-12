@extends('admin.dashboard')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h2>Pengajar SMK NU Kabat</h2>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
        <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <div class="table-responsive rounded shadow py-3 px-3">
        <a href="/admin/teacher/create" class="btn btn-success mb-3"><i class="bi bi-plus-circle pe-2"></i>Tambah Pengajar Baru</a>
        <table class="table table-sm align-middle text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">foto</th>
              <th scope="col">Nik</th> 
              <th scope="col">nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Mengajar</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Hp</th>
              <th scope="col">Tanggal Masuk</th>
              <th scope="col">Aksi</th>
            </tr>
            </tr>
          </thead>
          <tbody>
              @foreach ($teachers as $teacher)                    
              <tr>
                <th>{{ $loop->iteration }}</th>
                @if ($teacher->photo)
                <td><img src="{{ asset('storage/'.$teacher->photo) }}" width="120px"></td>
                @else
                <td><img src="{{ asset('assets/img/nophoto.png') }}" width="120" alt="" ></td>
                @endif
                <td>{{ $teacher->nik }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->address }}</td>
                <td>{{ $teacher->departemen }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone_number }}</td>
                <td>{{ $teacher->joint_date->format('d M Y') }}</td>
                <td>
                  <a href="/admin/teacher/{{ $teacher->id }}/edit"class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                  <form action="/admin/teacher/{{ $teacher->id }}" method="POST" class="d-inline">
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