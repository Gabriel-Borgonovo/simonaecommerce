<div class="border-bottom d-flex justify-content-center align-items-center container">
  
  <div class="buscador py-2">
    <form action="{{ route('search') }}" method="GET" class="d-flex justify-content-center align-items-center gap-2">
      <input type="text" name="busqueda" class="form-control" placeholder="Buscar productos..." />
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
  </div>
</div>