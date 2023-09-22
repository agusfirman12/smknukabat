<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    {{-- mystyle --}}
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">

    {{-- bootsrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="image-section justify-content-center d-flex mt-5">
                    <img class="mb-4" src="{{ asset('assets/img/logo.png') }}" alt="" height="120px">
                </div>
                <div class="title text-center">
                    <h2>Selamat Datang, Admin</h2>
                    <h5>Di Sistem Website SMK NU Kabat</h5>
                </div>
                
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin bg-white px-3 py-4 rounded-3 shadow">
                    <form action="{{ route('login-process') }}" method="POST">
                        @csrf
                        <div class="d-flex justify-content-center">
                            <h6>Silahkan Masukkan Username/Password Anda</h6>
                        </div>
                        <div class="form-floating">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        </div>

                        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>