<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMK NU Kabat</title>
    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">

    {{-- my css --}}
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- bootsrap css & icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <main>
        @include('layouts.navbar')

        @yield('main')

        @include('layouts.footer')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
      const nav =  document.querySelector('#nav');
      window.addEventListener('scroll',function(){
        if(window.scrollY > 56 ){
          nav.classList.remove('bg-opacity-75');
          nav.classList.add('shadow');
        }else{
          nav.classList.add('bg-opacity-75');
          nav.classList.remove('shadow');
        }
      });

      document.querySelectorAll('#nav-link-page').forEach(link => {
        if(link.href === window.location.href){
          link.setAttribute('aria-current','page');
        }
      });

      document.querySelectorAll('#nav-link-active').forEach(link => {
        if(link.href === window.location.href){
          link.setAttribute('aria-current','page');
        }
      });
      

    </script>

  </body>
</html>