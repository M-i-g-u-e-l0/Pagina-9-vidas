// carousel.js
document.addEventListener('DOMContentLoaded', function() {
    let currentIndex = 0;
    const images = document.querySelectorAll('.carousel-images img');
    const totalImages = images.length;

    function showImage(index) {
        images.forEach(img => img.style.display = 'none');
        images[index].style.display = 'block';
    }

    function nextImage(event) {
        event.preventDefault(); 
        currentIndex = (currentIndex + 1) % totalImages;
        showImage(currentIndex);
    }

    function prevImage(event) {
        event.preventDefault(); 
        currentIndex = (currentIndex - 1 + totalImages) % totalImages;
        showImage(currentIndex);
    }

    document.querySelector('.carousel-next').addEventListener('click', nextImage);
    document.querySelector('.carousel-prev').addEventListener('click', prevImage);

    showImage(0); 
});
