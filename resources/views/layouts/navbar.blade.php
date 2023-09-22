    {{-- navbar section --}}
    <nav id="nav" class="navbar navbar-expand-lg bg-body-tertiary fixed-top bg-opacity-75 shadow">
        <div class="container">
            <a class="navbar-brand d-flex fw-semibold align-items-center fs-3" href="/">
                <img src="{{ asset('assets/img/logo.png') }}" alt="SMK NU KABAT" height="60px">
                <div class="ms-2">SMK NU</div>
                &nbsp;
                <div style="color: #1687A7">Kabat</div>
            </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-evenly fs-6" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item px-5">
                <a id="nav-link-active"  class="nav-link fw-semibold" href="/">Beranda</a>
              </li>
              <li class="nav-item dropdown px-5 fw-semibold">
                    <a id="nav-link-active"  class="nav-link dropdown-toggle fw-semibold " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/#sambutan-kepalasekolah">Sambuatan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="{{ route('sejarah') }}">Sejarah Singkat</a></li>
                        <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="{{ route('organisasi') }}">Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{ route('pengajar') }}">Pengajar</a></li>
                        <li><a class="dropdown-item" href="{{ route('extrakurikuler') }}">Extrakurikuler</a></li>
                        <li><a class="dropdown-item" href="/#kerjasama">Kerjasama</a></li>
                    </ul>
              </li>
              <li class="nav-item dropdown px-5 fw-semibold">
                    <a id="nav-link"  class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Jurusan
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('jurusan-tkj') }}">Teknik Komputer Dan Jaringan</a></li>
                      <li><a class="dropdown-item" href="#">Teknik Kendaraan Ringan</a></li>
                    </ul>
                </li>
              <li class="nav-item px-5 fw-semibold">
                <a id="nav-link-active" class="nav-link" href="/#berita" >Berita</a>
              </li>

              @auth
              <li class="nav-item dropdown px-5 fw-semibold">
                <a id="nav-link"  class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Hello, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('dashboard') }}"> <i class="bi bi-layout-text-sidebar-reverse"></i>  Dashboard</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>  Logout</button>
                    </form>
                  </li>
                </ul>
            </li>
              @else
              <li class="nav-item px-5 fw-semibold">
                <a id="nav-link" class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    {{-- end navbar section --}}