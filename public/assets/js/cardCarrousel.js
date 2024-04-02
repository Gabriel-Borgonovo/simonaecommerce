const wrapper = document.querySelector('.wrapper');
const carousel = document.querySelector('.carousel');
const arrowBtns = document.querySelectorAll('.btns-related-products');
const firstCardWidth = carousel.querySelector('.card').offsetWidth;
const carouselChildrens = [...carousel.children];

//get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

//insert copies of the last few cards to begining of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

//insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    });
});


let isDragging = false, startX, startScrollLeft, timeoutId;

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    //records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return;
    //updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove('dragging')
}

const autoPlay = () => {
    if(window.innerWidth < 800) return; //return if window is smaller than 800
    //Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}

autoPlay();

const infiniteScroll = () => {
    //If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    //If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth){
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    //Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener('scroll', infiniteScroll);
wrapper.addEventListener('mouseenter', () => clearTimeout(timeoutId));
wrapper.addEventListener('mouseleave', autoPlay);

//Create A Draggable Card Slider in HTML CSS & JavaScript | Infinite Image Slider in JavaScript
//15:25