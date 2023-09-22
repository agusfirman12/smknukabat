@extends('layouts.main')

@section('main')
    {{-- carousel section --}}
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
        <div class="carousel-inner">
          @foreach ($banner as $item)    
          <div class="carousel-item active c-item">
            <img src="{{ asset('storage/'.$item->photo) }}" class="d-block w-100 c-img" alt="slide{{ $loop->iteration }}">
            <div class="carousel-caption top-0">
              <h1 class="mt-5 display-1 fw-bolder text-capitalize">{{ $item->title }}</h1>
              <p class="fs-4 text-uppercase">{{ $item->sub_title }}</p>
              {{-- <button id="hero-btn" class="btn text-white px-4 py-2 fs-5 mt-5">More Info</button> --}}
            </div>
          </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- end carousel section --}}

    {{-- welcome word section --}}
    <div id="sambutan-kepalasekolah" class="container">
      <div class="row mt-5 d-flex justify-content-evenly">
        <div class="col-md-5 d-flex align-items-center">
          <div class="principal-img">
            <img id="principal-img" class="rounded" src="{{ asset("assets/img/smknu-kabat.png") }}" alt="" width="100%">
          </div>
        </div>
        <div class="col-md-5 word-col text-white">
          <h1 class="fw-semibold">Sambutan Kepala Sekolah</h1>
          <p class="fs-5" style="text-align: justify">Selamat datang di website resmi SMK NU Kabat!
            Kami dengan bangga mempersembahkan platform ini sebagai jendela interaktif menuju dunia pendidikan yang kami anut. Di SMK NU Kabat, kami berkomitmen untuk menyediakan lingkungan belajar yang inspiratif, inklusif, dan inovatif bagi setiap siswa.
            Melalui website ini, kami berbagi informasi terkini seputar kegiatan, prestasi, dan program-program unggulan sekolah kami. Kami juga ingin mengundang Anda semua, baik siswa, orang tua, maupun masyarakat, untuk turut serta dalam perjalanan pendidikan yang penuh makna ini.Terima kasih atas kepercayaan yang Anda berikan kepada kami. Mari bersama kita membentuk generasi yang cerdas, kreatif, dan berakhlak mulia.</p>
          <p class="text-end fs-5">salam hangat,</p>
          <p class="text-end fs-5">Hendra Prayudi S.Pd., M.Pd Kepala Sekolah SMK NU Kabat</p>
        </div>
      </div>
    </div>
    {{-- end welcome word section --}}

    {{-- pengumuman section --}}
    <section class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col text-center py-5">
            <h2 style="color: #1687A7">Pengumuman</h2>
            <span class="line"></span>
          </div>
        </div>
        <div class="row d-flex justify-content-between text-center pb-5">
          <div class="col">
            <div class="row d-flex justify-content-evenly">
              <div class="col-md-3 bg-body-secondary rounded py-2" >
                <i class="bi bi-calendar-week fs-1" style="color: #ffbe38"></i>
                <h3 style="color: #1687A7">Cooming Soon Event</h3>
              </div>
              @foreach ($announcementFirst as $item)    
              <div class="col-md-8 py-3">
                <img class="pengumuman-img" src="{{ asset('storage/'.$item->photo) }}">
                <h2>{{ $item->title }}</h2>
                <p style="text-align: justify"> {!! $item->annoucment_fill !!}</p>
                <a href="/pengumuman/{{ $item->id }}">
                  <button id="pengumuman-btn" class="btn btn-sm text-white ">Selengkapnya <i class="bi bi-arrow-right"></i></button>
                </a>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-2 py-2 ">
            <div class="row">
              <p class="fs-5 text-body-secondary">Event Sebelumnya</p>
            </div>
            @foreach ($announcement as $item)    
            <div class="row">
              <a class="text-decoration-none text-dark" href="/pengumuman/{{ $item->id }}">
                @if ($item->photo)
                <td><img src="{{ asset('storage/'.$item->photo) }}" width="250px"></td>
                @else
                <td><img src="{{ asset('assets/img/news.png') }}" width="120" alt="" ></td>
                @endif
                <p>{{ $item->title }}</p>
              </a>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    {{-- end pengumuman section --}}


    {{-- berita section --}}
    <section id="berita">
      <div class="container">
        <div class="row pt-5 pb-3">
          <div class="col text-center">
            <h2 class="text-white">Berita Terbaru</h2>
            <span class="line bg-light"></span>
          </div>
        </div>
        <div class="row pt-1 pb-3 d-flex justify-content-evenly">
          @empty($posts)
          <h2 class="opacity-50 text-center">Belum Ada Berita</h2>
          @endempty
          @foreach ($posts as $post)              
          <div class="col-md-3">
            <div class="card" style="width: 18rem;">
              @if ($post->photo)
              <img src="{{ asset('storage/'.$post->photo) }}" class="card-img-top">
              @else
              <img src="{{ asset('assets/img/news.png') }}" class="card-img-top">
              @endif
              <div class="card-body">
                <a class="text-decoration-none text-dark deskripsi-berita" href="/berita/{{ $post->id }}">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->excerpt }}</p>
                </a>
                <div class="text-end">
                  <button id="berita-btn" class="btn btn-sm">
                    <a class="text-decoration-none text-white" href="/berita/{{ $post->id }}">baca selengkapnya</a>
                  </button>
                </div>
              </div>
              <div class="card-footer text-body-secondary d-flex">
                <i class="bi bi-person-fill"></i>
                <p class="ms-2">{{ $post->user->name }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row d-flex justify-content-center pb-5">
          <div class="text-center align-items-center">
            <a href="{{ route('all-post') }}" id="all-news" class=" fs-5 text-decoration-none">Lihat Semua Berita <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        </div>
      </div>
    </section>
    {{-- end berita section --}}

    {{-- kerjasama section --}}
    <section id="kerjasama" class="bg-light">
      <div class="container">
        <div class="row pt-5 pb-3">
          <div class="col text-center">
            <h2 style="color: #1687A7">Kejasama</h2>
            <span class="line"></span>
          </div>
        </div>
        <div class="row pt-3 pb-5 text-center">
          <div class="col-md-3">
            <img src="{{ asset("assets/img/logo-poliwangi.png") }}" alt="" style="width: 75%">
            <p>Politeknik Negeri Banyuwangi</p>
          </div>
          <div class="col-md-3">
            <img src="{{ asset("assets/img/logo.png") }}" alt="" style="width: 75%">
            <p>smk nu kabat</p>
          </div>
          <div class="col-md-3">
            <img src="{{ asset("assets/img/logo-poliwangi.png") }}" alt="" style="width: 75%">
            <p>Politeknik Negeri Banyuwangi</p>
          </div>
          <div class="col-md-3">
            <img src="{{ asset("assets/img/logo.png") }}" alt="" style="width: 75%">
            <p>smk nu kabat</p>
          </div>
          </div>
        </div>
      </div>
    </section>
    {{-- end kerjasama section --}}
@endsection