<nav class="navbar navbar-expand px-3 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse navbar">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a id="nav-link"  class="nav-link dropdown-toggle fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, Wellcome {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/"> <i class="bi bi-house"></i> Home</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>  Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>