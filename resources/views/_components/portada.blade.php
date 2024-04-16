<div class="slider">
    <div class="slider-slides">
        <div class="slider-slide activado bg-light d-flex justify-content-between overflow-hidden">
            <div class="align-self-center w-100 d-flex flex-column align-items-start">
                <h4 class="display-3 text-start"><b class="text-warning">Simona</b> Ecommerce</h4>
                <h5 class="text-start">Tienda de indumentaria y moda</h5>  
                <p class="text-start">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur omnis voluptates optio cupiditate iste at iusto, aliquid earum, commodi qui ea nisi explicabo debitis reiciendis sunt libero velit sint consequuntur.</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>
            
            <img src="/imgs/saco-rosa-zafira3.jpg" alt="1" class="d-none d-lg-block">
        </div>

        <div class="slider-slide bg-lg-warning d-flex flex-column flex-lg-row rounded justify-content-between overflow-hidden">
            <div class="align-self-center text-start w-100 d-flex flex-column align-items-start p-1 p-lg-5">
                <h2 class="display-4 text-start">Outfit completo para salir</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque neque, minima cumque magni quo magnam accusantium, dignissimos consequuntur tempore optio laborum molestiae iste! Pariatur possimus, odit asperiores tempora ipsa ratione.</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>

            <img src="/imgs/slider2.jpg" alt="1" class="img-fluid d-none d-lg-block">
            <img src="/imgs/slider2-movil.jpg" alt="1" class="img-fluid d-lg-none">
            
        </div>

        <div class="slider-slide bg-lg-warning d-flex flex-column flex-lg-row rounded justify-content-between overflow-hidden">
            <div class="align-self-center text-start w-100 d-flex flex-column align-items-start p-1 p-lg-5">
                <h2 class="display-4 text-start">Llego la temporada otoño - invierno</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque neque, minima cumque magni quo magnam accusantium, dignissimos consequuntur tempore optio laborum molestiae iste! Pariatur possimus, odit asperiores tempora ipsa ratione.</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>

            <img src="/imgs/buzo-dep-california.jpg" alt="1" class="img-fluid d-none d-lg-block">
            
        </div>

        <div class="slider-slide bg-lg-warning d-flex flex-column flex-lg-row rounded justify-content-between overflow-hidden">
            <div class="align-self-center text-start w-100 d-flex flex-column align-items-start p-1 p-lg-5">
                <h2 class="display-4 text-start">Llegaron los conjuntos deportivos!!!</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque neque, minima cumque magni quo magnam accusantium, dignissimos consequuntur tempore optio laborum molestiae iste! Pariatur possimus, odit asperiores tempora ipsa ratione.</p>
                <a href="{{ route('productos') }}" class="btn btn-warning">Ver productos</a>
            </div>

            <img src="/imgs/conjunto-mujer-deportivo.jpg" alt="1" class="img-fluid d-none d-lg-block">
            
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