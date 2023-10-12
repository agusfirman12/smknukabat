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
                  @include('jurusan.sidebar')
                </div>
                <div class="col-md-8">
                    <h2 class="text-center">TEKNIK KENDARAAN RINGAN (TKR)</h2>
                    <div class="d-flex justify-content-center page-img">
                        <img class="p-img-major" src="{{ asset('assets/img/tkr.png') }}" width="75%">
                    </div>
                    <p class="fs-5" style="text-align: justify">Jurusan ini berdiri sejak awal berdirinya SMK NU KABAT jurusan ini berkembang siring dengan perkembangan sekolah
                        Teknik Kendaraan Ringan merupakan kompetensi keahlian dibidang Teknik Otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan.  Kompetensi keahlian teknik kendaraan ringan menyiapkan peserta didik untuk bekerja pada pekerjaan jasa perawatan dan perbaikan didunia usaha / industri.
                        Kompetensi Teknik Kendaraan Ringan Otomotif adalah sebuah ilmu yang mempelajari kompetisi keahlian bidang teknik otomotif yang menekankan pada bidang jasa perbaikan kendaraan ringan (Mobil). Tujuan Kompetensi Keahlian Teknik Kendaraan Ringan adalah untuk membekali Peserta didik dengan keterampilan, Pengetahuan, dan Sikap pada Dunia Otomotif.
                        
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection