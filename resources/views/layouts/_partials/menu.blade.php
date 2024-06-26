<nav class="navbar navbar-expand-lg bg-light border-bottom">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index') }}">
        <img src="/imgs/logo-simona.png" alt="logo simona" class="logo-simona">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('productos') }}">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('index') }}#contacto-data">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>