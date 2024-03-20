console.log('conectado la página de detalles del producto');

const d = document;
const $imgs = d.querySelectorAll('.js-imgs img'); // Select all imgs within .js-imgs
const $mainImg = d.querySelector('.js-main-img img'); // Select img within .js-main-img
const $mainImgContainer = d.querySelector('.js-main-img');

$imgs.forEach((img) => {
  img.addEventListener('click', (e) => {
    // Get the clicked image's source URL efficiently
    const newSrc = e.target.src;

    // Update the main image's source directly for faster rendering
    $mainImg.src = newSrc;

    // Toggle 'img-active' class for visual and state management
    img.classList.toggle('img-active');

    // Remove 'img-active' from all other thumbnail images
    $imgs.forEach(otherImg => {
      if (otherImg !== img) { // Avoid unnecessary checks on the clicked image
        otherImg.classList.remove('img-active');
      }
    });
  });
});





$mainImgContainer.addEventListener('mousemove', (e) => {
  const { offsetX: x, offsetY: y } = e;
  const { offsetWidth: width, offsetHeight: height } = $mainImgContainer;
  const scaleRatio = 3; // Scale factor, adjust as needed

  const xPercent = (x / width) * 100;
  const yPercent = (y / height) * 100;

  $mainImg.style.transformOrigin = `${xPercent}% ${yPercent}%`;
  $mainImg.style.transform = `scale(${scaleRatio})`;
});

$mainImgContainer.addEventListener('mouseleave', () => {
  $mainImg.style.transform = 'scale(1)';
});