<div class="border-bottom">
  <div class="buscador container py-2">
    <form action="{{ route('search') }}" method="GET">
      <input type="text" name="busqueda" placeholder="Buscar productos..." />
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
  </div>
</div>