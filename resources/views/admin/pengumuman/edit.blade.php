@extends('admin.dashboard')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h2>Edit Pengumuman </h2>
    </div>

    <div class="col-lg-8 rounded shadow p-4">
        <form method="post" action="/admin/announcement/{{ $announcement->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old( 'title', $announcement->title) }}" required autofocus>
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto Pengumuman</label>
                @if ($announcement->photo)
                <img src="{{ asset('storage/'. $announcement->photo) }}" id="imgPreview" class="img-fluid mb-3 col-md-5 d-block"> 
                @else                    
                <img src="" id="imgPreview" class="img-fluid mb-3 col-md-5">    
                @endif
                <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()">
                @error('photo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="annoucment_fill" class="form-label">Isi Pengumuman</label>
                @error('annoucment_fill') 
                    <p class="text-danger">{{ $message }}</p>   
                @enderror
                <input id="annoucment_fill" type="hidden" name="annoucment_fill" value="{{ old ('annoucment_fill', $announcement->annoucment_fill)}}">
                <trix-editor input="annoucment_fill"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update Berita</button>
          </form>
    </div>
</div>

<script>
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#photo');
        const imgPreview = document.querySelector('#imgPreview');

        imgPreview.style.display = 'block';
        // console.log(image.files[0]);
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    } 

</script>
@endsection