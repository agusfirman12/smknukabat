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
                    <h2 class="text-center">TEKNIK KOMPUTER DAN JARINGAN (TKJ)</h2>
                    <div class="d-flex justify-content-center page-img">
                        <img class="p-img-major" src="{{ asset('assets/img/tkj.png') }}" width="75%">
                    </div>
                    <p class="fs-5" style="text-align: justify">Jurusan ini berdiri sejak awal berdirinya SMK NU KABAT jurusan ini berkembang siring dengan perkembangan sekolah
                        Teknik Komputer & Jaringan (TKJ) merupakan salah satu program keahlian SMK yang bergerak di bidang Teknologi Informasi dan Komunikasi. Jurusan TKJ adalah suatu jurusan yang terdapat di SMK yang mempelajari seluk - beluk dunia komputer dan jaringan komputer, seperti cara instalasi Sistem Operasi, menangani masalah pada PC, memperbaiki PC, menangani jaringan, membuat WEB dan sebagainya.
                        Program keahlian ini bertujuan untuk membekali peserta didik dengan keterampilan dan pengetahuan tersebut agar kompeten sehingga mampu bekerja sebagai teknisi komputer maupun administrator jaringan di berbagai perusahaan, perkantoran, bank ataupun ISP.
                        Agar peseta didik memiliki kemampuan di bidangnya, maka SMK NU KABAT telah dilengkapi dengan sarana prasarana yang cukup baik seperti computer maupun perangkat jaringan yang sudah disesuaikan di dunia kerja seperti perangkat jaringan yang sudah menggunakan mikrotik.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection