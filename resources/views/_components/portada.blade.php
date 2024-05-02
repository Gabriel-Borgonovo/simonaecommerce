<div class="slider">
    <div class="slider-slides">
        <div class="slider-slide activado bg-light d-flex flex-column flex-lg-row justify-content-between overflow-hidden">
            <div class="align-self-center w-100 d-flex flex-column align-items-start">
                <h4 class="display-3 text-start"><b class="text-warning">Simona</b> Ecommerce</h4>
                <h5 class="text-start">Tienda de indumentaria y moda</h5>  
                <p class="text-start">Explora Simona Ecommerce, tu destino para la última moda en indumentaria. Encuentra una amplia selección de prendas y accesorios de estilo único en nuestra tienda online. ¡Descubre lo mejor en tendencias!</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>
            
            <img src="/imgs/saco-rosa-zafira3.jpg" alt="1" class="d-lg-block">
        </div>

        <div class="slider-slide bg-lg-warning d-flex flex-column flex-lg-row rounded justify-content-between overflow-hidden">
            <div class="align-self-center text-start w-100 d-flex flex-column align-items-start p-1 p-lg-5">
                <h2 class="display-4 text-start">Outfit completo para salir</h2>
                <p>Encuentra la combinación ideal para tus salidas en nuestro catálogo de outfits completos. Descubre prendas versátiles y de tendencia que te harán lucir radiante en cada ocasión. ¡Explora nuestra selección hoy mismo!</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>

            <img src="/imgs/slider2.jpg" alt="1" class="img-fluid d-lg-block">
            {{-- <img src="/imgs/slider2-movil.jpg" alt="1" class="img-fluid d-lg-none"> --}}
            
        </div>

        <div class="slider-slide bg-lg-warning d-flex flex-column flex-lg-row rounded justify-content-between overflow-hidden">
            <div class="align-self-center text-start w-100 d-flex flex-column align-items-start p-1 p-lg-5">
                <h2 class="display-4 text-start">Llego la temporada otoño - invierno</h2>
                <p>Prepárate para abrigarte con estilo esta temporada otoño-invierno. Descubre nuestras nuevas colecciones con lo último en moda para mantenerte cálida y a la moda. ¡Explora ahora y encuentra tu look perfecto!</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>

            <img src="/imgs/buzo-dep-california.jpg" alt="1" class="img-fluid d-lg-block">
            
        </div>

        <div class="slider-slide bg-lg-warning d-flex flex-column flex-lg-row rounded justify-content-between overflow-hidden">
            <div class="align-self-center text-start w-100 d-flex flex-column align-items-start p-1 p-lg-5">
                <h2 class="display-4 text-start">Llegaron los conjuntos deportivos!!!</h2>
                <p>¡Eleva tu juego con nuestra última llegada! Descubre nuestra colección de conjuntos deportivos que te acompañarán en cada movimiento. Encuentra comodidad y estilo para tus entrenamientos. ¡Explora ahora y destaca en el deporte!</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>

            <img src="/imgs/conjunto-mujer-deportivo.jpg" alt="1" class="img-fluid d-lg-block">
            
        </div>
    </div>

    {{-- botones --}}
    <div class="slider-btns">
        <a href="#" class="prev">
            <img src="/imgs/chevron-left.svg" alt="left">
        </a>
        <a href="#" class="next">
            <img src="/imgs/chevron-rigth.svg" alt="rigth">
        </a>
    </div>

    <!-- Botones indicadores -->
    <div class="slider-indicators">
        <!-- Agrega un botón indicador por cada diapositiva -->
    </div>
</div>

@section('scripts')
    <script src="{{ asset('assets/js/main.js')}}" type="module"></script>
@endsection