<div class="buscador">
    <form action="{{ route('search') }}" method="GET">
      <input type="text" name="busqueda" placeholder="Buscar productos..." />
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
  </div>