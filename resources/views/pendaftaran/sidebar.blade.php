<nav class="navbar navbar-expand-lg bg-body-secondary rounded-4 text-center">
    <div class="container d-flex flex-column text-start">
      <h5>PPDB</h5>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex flex-column ">
          <li class="nav-item">
            <a id="nav-link-page" class="nav-link" href="{{ route('pendaftaran')}}">Pendaftaran</a>
          </li>
          <li class="nav-item">
            <a id="nav-link-page" class="nav-link" href="{{ route('panduan-pendaftaran')}}">Panduan Pendaftaran</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>