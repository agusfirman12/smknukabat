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
                    <h2>Sejarah singkat SMK NU Kabat</h2>
                    <p class="fs-5 mt-5" style="text-align: justify">SMK NU Kabat Merupakan Lembaga Pendidikan Yang Berdri pada Tahun 2014, Berlokasi di kedayunan Kecamatan Kabat Kabupaten Banyuwangi. SMK NU Kabat Di pimpin oleh bapak Hendra Prayudi S.Pd., M.Pd, sejak awal berdiri hingga sekarang. Bapak Hendra Prayudi memiliki dedikasi yang tinggi dalam memimpin suatu lembaga itu terbukti hingga saat ini SMK NU kabat telah mengalami perubahan yang sangat signifikan. </p>
                </div>
            </div>
        </div>
    </section>
    {{-- end sejarah section --}}
@endsection