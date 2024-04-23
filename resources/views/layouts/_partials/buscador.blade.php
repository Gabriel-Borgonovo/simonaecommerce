<div class="bg-dark">
<div class="border-bottom d-flex justify-content-center align-items-center container">
  
  <div class="buscador py-2 d-flex justify-content-center align-items-center">
    <form action="{{ route('search') }}" method="GET" class="d-flex justify-content-center align-items-center gap-2 p-0">
      <input type="text" name="busqueda" class="form-control" placeholder="Buscar productos..." />
      <button type="submit" class="btn btn-warning">Buscar</button>
    </form>
  </div>
</div>
</div>