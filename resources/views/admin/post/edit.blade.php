@extends('admin.dashboard')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h2>Edit Berita </h2>
    </div>

    <div class="col-lg-8 rounded shadow p-4">
        <form method="post" action="/admin/post/{{ $post->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Judul</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old( 'title', $post->title) }}" required autofocus>
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Keterangan Judul</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old ('slug', $post->slug)}}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto Berita</label>
                @if ($post->photo)
                <img src="{{ asset('storage/'. $post->photo) }}" id="imgPreview" class="img-fluid mb-3 col-md-5 d-block"> 
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
                <label for="post_fill" class="form-label">Isi Berita</label>
                @error('post_fill') 
                    <p class="text-danger">{{ $message }}</p>   
                @enderror
                <input id="post_fill" type="hidden" name="post_fill" value="{{ old ('post_fill', $post->post_fill)}}">
                <trix-editor input="post_fill"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Update Berita</button>
          </form>
    </div>
</div>

<script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

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