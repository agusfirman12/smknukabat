@extends('layouts.main')

@section('main')
<section class="bg-light pb-5">
    <div class="container border-bottom text-center" style="padding-top: 100px">
        <div class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2">
                <h2>{{ $announcement->title }}</h2>
        </div>
    </div>
    <div class="container col-7 pt-3 text-center shadow rounded-4 mt-2 pb-5">
        <img src="{{ asset('storage/'.$announcement->photo) }}" width="75%">
        {!! $announcement->annoucment_fill !!}
    </div>
</section>
@endsection