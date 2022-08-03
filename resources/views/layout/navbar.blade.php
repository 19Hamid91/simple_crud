<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('pengguna.index') }}">CRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('pengguna.index') }}">Data Mahasiswa</a>
          </li>
          @if (Auth::check() && Auth::user()->level == 'admin')
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('user.index') }}">User</a>
          </li>
          @endif
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
        <button class="btn btn-danger ms-4">Logout</button>
      </form>
      </div>
    </div>
  </nav>