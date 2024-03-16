const d = document;

export default function slider() {
    const $nextBtn = d.querySelector('.next'),
          $prevBtn = d.querySelector('.prev'),
          $slides = d.querySelectorAll('.slider-slide'),
          $indicatorsContainer = d.querySelector('.slider-indicators');

    let currentSlideIndex = 0;
    let intervalId; // Variable para almacenar el ID del intervalo
    const totalSlides = $slides.length;
    const intervalTime = 3000; // 3 segundos

    // Verificar la existencia de los elementos
    if (!$nextBtn || !$prevBtn || !$slides.length || !$indicatorsContainer) {
        console.error('Elementos faltantes para el slider');
        return;
    }

    // Crear los indicadores de diapositivas
    $slides.forEach((_, index) => {
        const $indicator = d.createElement('button');
        $indicator.classList.add('slider-indicator');
        $indicator.addEventListener('click', () => {
            goToSlide(index);
            pauseSlider(); // Pausar el slider cuando se hace clic en un botón indicador
        });
        $indicatorsContainer.appendChild($indicator);
    });

       // Función para cambiar a una diapositiva específica
    function goToSlide(index) {
        $slides[currentSlideIndex].classList.remove('activado');
        $indicatorsContainer.children[currentSlideIndex].classList.remove('indicator-activado'); // Remover la clase de indicador activo de la diapositiva actual
        $slides[index].classList.add('activado');
        $indicatorsContainer.children[index].classList.add('indicator-activado'); // Agregar la clase de indicador activo a la nueva diapositiva
        currentSlideIndex = index;
    }


    // Función para iniciar el slider
    function startSlider() {
        intervalId = setInterval(() => {
            const nextIndex = (currentSlideIndex + 1) % totalSlides;
            goToSlide(nextIndex);
        }, intervalTime);
    }

    // Función para pausar el slider
    function pauseSlider() {
        clearInterval(intervalId);
    }

    // Manejar el clic en el botón "siguiente"
    $nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const nextIndex = (currentSlideIndex + 1) % totalSlides;
        goToSlide(nextIndex);
        pauseSlider(); // Pausar el slider cuando se hace clic en el botón "siguiente"
    });

    // Manejar el clic en el botón "anterior"
    $prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const prevIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
        goToSlide(prevIndex);
        pauseSlider(); // Pausar el slider cuando se hace clic en el botón "anterior"
    });

    // Iniciar el slider
    startSlider();
}