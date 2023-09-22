@extends('layouts.main')

@section('main')
    <section class="bg-light">
        <div class="hero-img">
            <div class="page-img">
                @if ($post->photo)
              <img class="p-img" src="{{ asset('storage/'.$post->photo) }}" width="100%">
              @else
              <img class="p-img" src="{{ asset('assets/img/news.png') }}" width="100%">
              @endif
            </div> 
        </div>
        <div class="container px-5 py-5">
            <div class="row d-flex justify-content-evenly">
                <div class="col-md-8">                       
                    <h2>{{ $post->title }}</h2>
                    <div class="row">
                        <div class="col-2">
                            <p><i class="bi bi-person-fill pe-2"></i>{{ $post->user->name }}</p>
                        </div>
                        <div class="col-2">
                            <p><i class="bi bi-calendar-fill pe-2"></i>{{ $post->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                     {!! $post->post_fill !!}
                </div>
            </div>
        </div>
    </section>
@endsection