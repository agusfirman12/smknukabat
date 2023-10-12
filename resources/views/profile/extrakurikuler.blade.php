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
                    <h2>Extrakurikuler SMK NU Kabat</h2>
                    <div class="row mt-5">
                        <div class="col-md-4 mb-4">
                            <div class="card text-light shadow">
                                <img src="{{ asset('assets/img/extra/EC1.jpeg') }}" class="card-img">
                                <div class="card-img-overlay mt-5">
                                  <h5 class="card-title bg-secondary bg-opacity-75 mt-4 rounded text-center">English Club</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-light shadow">
                                <img src="{{ asset('assets/img/extra/HADRAAH.jpeg') }}" class="card-img">
                                <div class="card-img-overlay mt-5">
                                  <h5 class="card-title bg-secondary bg-opacity-75 mt-4 rounded text-center">Hadrah</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-light shadow">
                                <img src="{{ asset('assets/img/extra/TARI.jpeg') }}" class="card-img">
                                <div class="card-img-overlay mt-5">
                                  <h5 class="card-title bg-secondary bg-opacity-75 mt-4 rounded text-center">Tari</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-light shadow">
                                <img src="{{ asset('assets/img/extra/PRAMUKA.jpeg') }}" class="card-img">
                                <div class="card-img-overlay mt-5">
                                  <h5 class="card-title bg-secondary bg-opacity-75 mt-4 rounded text-center">Pramuka</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-light shadow">
                                <img src="{{ asset('assets/img/extra/ANGKLUNG.jpeg') }}" class="card-img">
                                <div class="card-img-overlay mt-5">
                                  <h5 class="card-title bg-secondary bg-opacity-75 mt-4 rounded text-center">Angklung</h5>
                                </div>
                              </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card text-light shadow">
                                <img src="{{ asset('assets/img/extra/SILAT.jpeg') }}" class="card-img">
                                <div class="card-img-overlay mt-5">
                                  <h5 class="card-title bg-secondary bg-opacity-75 mt-4 rounded text-center">Pencak Silat</h5>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection