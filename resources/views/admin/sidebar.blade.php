<aside id="sidebar">
    <div class="h-100">
      <div class="sidebar-logo">
        <a href="#">
          <img src="{{ asset('assets/img/logo.png') }}" alt="smk nu kabat">
          SMK NU Kabat
        </a>
      </div>
      <ul class="sidebar-nav">
        <li class="sidebar-header">
          Dasboard Menu
        </li>
        <li class="sidebar-item">
          <a href="{{ route('dashboard') }}" class="sidebar-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <i class="bi bi-list-task pe-2"></i>
            Dasboard
          </a>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link collapsed {{ Request::is('admin/banner*') ? 'active' : '' }}" data-bs-target="#banner" data-bs-toggle="collapse" aria-expanded="false">
            <i class="bi bi-images pe-2"></i>
            Banner
          </a>
          <ul id="banner" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="/admin/banner" class="sidebar-link">
                Semua Banner
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/admin/banner/create" class="sidebar-link">
                Tambah Banner
              </a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link collapsed {{ Request::is('admin/pengumuman') ? 'active' : '' }}" data-bs-target="#annoucment" data-bs-toggle="collapse" aria-expanded="false">
            <i class="bi bi-megaphone pe-2"></i>
            Pengumuman
          </a>
          <ul id="annoucment" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="/admin/announcement" class="sidebar-link">
                Semua Pengumuman
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/admin/announcement/create" class="sidebar-link">
                Tambah Pengumuman
              </a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link collapsed {{ Request::is('admin/post*') ? 'active' : '' }}" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false">
            <i class="bi bi-newspaper pe-2"></i>
            Berita
          </a>
          <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="/admin/post" class="sidebar-link">
                Semua Berita
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/admin/post/create" class="sidebar-link">
                Tambah Berita
              </a>
            </li>
          </ul>
        </li>
        <li class="sidebar-item">
          <a href="#" class="sidebar-link collapsed {{ Request::is('admin/teacher*') ? 'active' : '' }}" data-bs-target="#teacher" data-bs-toggle="collapse" aria-expanded="false">
            <i class="bi bi-person pe-2"></i>
            Pengajar
          </a>
          <ul id="teacher" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
              <a href="/admin/teacher" class="sidebar-link">
                Semua Pengajar
              </a>
            </li>
            <li class="sidebar-item">
              <a href="/admin/teacher/create" class="sidebar-link">
                Tambah Pengajar
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>
 