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
                  @include('pendaftaran.sidebar')
                </div>
                <div class="col-md-8">
                    <h2 class="text-center">Pendaftaran Siswa Baru</h2>
                    
                </div>
            </div>
        </div>
    </section>
@endsection