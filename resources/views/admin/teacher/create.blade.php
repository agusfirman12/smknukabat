@extends('admin.dashboard')

@section('main')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
        <h2>Tambah Data Pengajar Baru</h2>
    </div>

    <div class="col-lg-8 rounded shadow p-4">
        <form method="post" action="/admin/teacher" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="photo" class="form-label">Foto Profile</label>
                <img src="" id="imgPreview" class="img-fluid mb-3 col-md-5"> 
                <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()">
                @error('photo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" value="{{ old( 'nip' ) }}" placeholder="2132xxxxxxxxx">
                    @error('nip')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old( 'nik' ) }}" placeholder="366xxxxxxxxx">
                    @error('nik')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old ('name')}}" placeholder="Silahkan masukkan nama lengkap">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old ('address')}}" placeholder="Alamat masukkan nama lengkap">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="departemen" class="form-label">Mata Pelajaran Yang Di Ajarkan</label>
                <input type="text" class="form-control @error('departemen') is-invalid @enderror" id="departemen" name="departemen" value="{{ old ('departemen')}}"placeholder="matematika, sejarah, bahasa indonesia, dll...">
                @error('departemen')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old( 'email' ) }}" placeholder="Silahkan email aktif">
                    @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col">
                    <label for="phone_number" class="form-label">Nomor Hp</label>
                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{ old( 'phone_number' ) }}" placeholder="Silahkan nomor Hp aktif">
                    @error('phone_number')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="joint_date" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control @error('joint_date') is-invalid @enderror" id="joint_date" name="joint_date" value="{{ old ('joint_date')}}">
                @error('joint_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Upload Data Pengajar</button>
          </form>
    </div>
</div>

<script>
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