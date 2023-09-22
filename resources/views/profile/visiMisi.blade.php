@extends('layouts.main')

@section('main')
    {{-- sejarah section --}}
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
                    <h2 class="mb-5">Visi dan Misi SMK NU Kabat</h2>
                    <h5 class="fw-bold">VISI</h5>
                    <p class="fs-5">Visi SMK NU Kabat Adalah :</p>
                    <p class="text-capitalize fs-5">&prime;&prime; terwujudnya sekolah yang menghasilkan tamatan yang kompeten berakhlak mulia, dan kompetitif mengisi dunia kerja &prime;&prime;</p>
                    <h5 class="fw-bold" style="margin-top: 100px">MISI</h5>
                    <p class="fs-5">Misi SMK NU Kabat Adalah :</p>
                    <ol class="list-group-numbered fs-5">
                        <li class="list-group-item">mengupayakan kelengkapan fasilitas sarana dan prasana yang layak dan memadai.</li>
                        <li class="list-group-item">menerapkan keterbukaan, kemitraan dan pelayanan prima.</li>
                        <li class="list-group-item">mengimplementasikan nilai - nilai agama dan bud pekerti oleh seluruh warga sekolah.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    {{-- end sejarah section --}}
@endsection