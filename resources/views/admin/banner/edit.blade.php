@extends('admin.dashboard')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h2>Edit Banner Halaman Muka</h2>
    </div>

    <div class="col-lg-8 rounded shadow p-4">
        <form method="post" action="/admin/banner/{{ $banner->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old( 'title',$banner->title ) }}">
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="sub_title" class="form-label">Keterangan Judul</label>
                <input type="text" class="form-control @error('sub_title') is-invalid @enderror" id="sub_title" name="sub_title" value="{{ old ('sub_title',$banner->sub_title)}}">
                @error('sub_title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div> 
                @enderror
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Banner Image</label>
                @if ($banner->photo)
                <img src="{{ asset('storage/'. $banner->photo) }}" id="imgPreview" class="img-fluid mb-3 col-md-5 d-block"> 
                @else                    
                <img src="" id="imgPreview" class="img-fluid mb-3 col-md-5">    
                @endif
                <img src="" id="imgPreview" class="img-fluid mb-3 col-md-5">
                <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()">
                @error('photo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <a href="/admin/banner" class="btn btn-success"><i class="bi bi-arrow-left-circle pe-2"></i>Kembali</a>
            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy pe-2"></i>Simpan Perubahan</button>
          </form>
    </div>
</div>
<script>
  function previewImage() {
      const image = document.querySelector('#photo');
      const imgPreview = document.querySelector('#imgPreview');

      imgPreview.style.display = 'block';

      const blob = URL.createObjectURL(image.files[0]);
      imgPreview.src = blob;
  } 


</script>
@endsection