@extends('admin.dashboard')

@section('main')
<div class="container">
  <h2 class="dashboard-title pt-3">Dashboard</h2>
  <div class="link pb-4 pt-2">
    <a href="{{ route('dashboard') }}" class=" text-dark fs-5">Dasboard</a> > <a href="" class=" fs-5">Home</a>
  </div>
  <div class="row recap d-flex justify-content-evenly">
    <div class="col-md-3">
      <a href="/admin/teacher">
      <div class="card teacher-card py-4">
        <div class="icon-teacher">
            <i class="bi bi-briefcase-fill fs-1" style="color: white"></i>
          </div>
          <div class="card-body text-center">
            <div class="fw-semibold fs-5">Total Pengajar</div>
            <div class="fw-bold fs-4">{{ $allTeacher }}</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="/admin/announcement">
      <div class="card announcement-card py-4">
        <div class="icon-announcement">
            <i class="bi bi-megaphone-fill fs-1" style="color: white"></i>
          </div>
          <div class="card-body text-center">
            <div class="fw-semibold fs-5">Total Pengumuman</div>
            <div class="fw-bold fs-4">{{ $allAnnouncement }}</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="/admin/post">
        <div class="card news-card py-4">
          <div class="icon-news">
            <i class="bi bi-newspaper fs-1" style="color: white"></i>
          </div>
          <div class="card-body text-center">
            <div class="fw-semibold fs-5">Total Berita</div>
            <div class="fw-bold fs-4">{{ $allPost }}</div>
          </div>
        </div>
      </a>
    </div>
  </div>
  <div class="row mt-5 d-flex justify-content-evenly">
    <div class="col-md-8 shadow p-3 rounded-3">
      <div class="d-flex">
        <h5>Pengajar SMK NU Kabat</h5>
        <a href="/admin/teacher/create" class="btn mb-3 btn-sm ms-auto text-white" style="background-color: #1687A7"><i class="bi bi-plus-circle"></i></a>
      </div>
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
          <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
  
      <div class="table-responsive py-3 px-3">
          <table class="table table-hover table-sm align-middle text-center">
            <thead>
              <tr>
                <th scope="col">nama</th>
                <th scope="col">Mengajar</th>
                <th scope="col">Email</th>
                <th scope="col">Nomor Hp</th>
                <th scope="col">Aksi</th>
              </tr>
              </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)                    
                <tr>
                  <td>
                    @if ($teacher->photo)
                    <img src="{{ asset('storage/'.$teacher->photo) }}" width="40px" class="rounded-circle">
                    @else
                    <img src="{{ asset('assets/img/nophoto.png') }}" width="40" class="rounded-circle">
                    @endif
                    {{ $teacher->name }}
                  </td>
                  <td>{{ $teacher->departemen }}</td>
                  <td>{{ $teacher->email }}</td>
                  <td>{{ $teacher->phone_number }}</td>
                  <td>
                    <a href="/admin/teacher/{{ $teacher->id }}/edit"class="text-secondary"><i class="bi bi-pencil-square"></i></a>
                    <form action="/admin/teacher/{{ $teacher->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="text-secondary bg-white border-0" onclick="return confirm('Apakah Anda Yakin ?')"><i class="bi bi-trash"></i></button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
      </div>
    </div>
    <div class="col-md-3 shadow ms-3 rounded-3 p-3">
      <h5>Berita Terbaru</h5>
      @foreach ($posts as $post)          
      <div class="row pt-4">
        <div class="col-4">
          @if ($post->photo)
            <img src="{{ asset('storage/'.$post->photo) }}" width="75px" class="rounded">
          @else
            <img src="{{ asset('assets/img/news.png') }}" width="75px" class="rounded" >
          @endif
        </div>
        <div class="col">
          <a href="/admin/post/{{ $post->id }}" class="fw-semibold text-dark">{{ $post->title }}</a>
          <br>
          <small class="text-dark text-opacity-50">post at. {{ $post->created_at->format('d M Y') }}</small>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection