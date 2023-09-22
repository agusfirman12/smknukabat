@extends('layouts.main')

@section('main')
    <section class="bg-light" style="margin-top: 75px">
        <div class="container px-5 py-5">
            <div class="row d-flex justify-content-evenly rounded-4" style="background-color: #1687A7">
                <h3 class="text-center text-white py-1">Semua Berita</h3>
            </div>
            <div class="row mt-5  d-flex justify-content-evenly">
                @foreach ($posts as $post)              
                <div class="col-md-3 mb-3">
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
        </div>
    </section>
@endsection