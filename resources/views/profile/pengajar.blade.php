@extends('layouts.main')

@section('main')
    <section class="bg-light">
        <div class="hero-img">
            <div class="page-img">
                <img class="p-img" src="{{ asset("assets/img/smknu-kabat.png") }}" alt="" width="100%">
            </div>
        </div>
        <div class="container px-5 py-5">
            <div class="row d-flex justify-content-evenly">
                <div class="col-md-3">
                  @include('profile.sidebar')
                </div>
                <div class="col-md-8">
                    <h2>Pengajar SMK NU Kabat</h2>
                    <div class="row d-flex justify-content-evenly mt-4">
                        @foreach ($teachers as $item)
                        <div class="col-md-3 shadow d-flex justify-content-center p-3 rounded-3">
                            <div class="profile-info text-center">
                                <img src="{{ asset('storage/'.$item->photo) }}" width="150px" height="150px" class="rounded-circle">
                                <div class="fs-4 fw-semibold">
                                    {{ $item->name }}
                                </div>
                                <div class="text-dark text-opacity-50">NIP. {{ $item->nip }}</div>
                                <div class="text-dark text-opacity-50">Guru {{ $item->departemen }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection