<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard website SMK NU Kabat</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    {{-- trix editor css & js --}}
      <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
      <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

      <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
          display: none;
        }
      </style>
  </head>
  <body>
    <div class="wrapper">
      @include('admin.sidebar')

      <div class="main">
        @include('admin.navbar')
        <main class="content px-3 py-2">

          @yield('main')
        </main>
      </div>
      <a href="#" class="theme-toggle">
        <i class="bi bi-sun-fill"></i>
        <i class="bi bi-moon-stars-fill"></i>
      </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  </body>

</html>
