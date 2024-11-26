<?php
$title = "Nine Lives of Revenge - Galeria"; 
$activePage = "galeria"; 
include('includes/header.php'); 
?>

<link rel="stylesheet" href="css/galeria.css">

<style>
    #galeria {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
    }

    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .gallery-item {
        position: relative;
        cursor: pointer;
    }

    .gallery-item img {
        width: 300px; 
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .gallery-item:hover img {
        transform: scale(1.05); 
    }

    .gallery-item-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s;
        border-radius: 10px;
    }

    .gallery-item:hover .gallery-item-overlay {
        opacity: 1; 
    }

    
    .full-size-image-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.1); 
        backdrop-filter: blur(15px); 
        justify-content: center;
        align-items: center;
        z-index: 1500; 
    }

    .full-size-image-container img {
        max-width: 90%;
        max-height: 90%;
        border-radius: 10px;
        cursor: pointer; 
    }
    
#galeria {
    padding: 20px;
    color: white;
}

.gallery-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr); 
    gap: 20px;
}

.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5); 
    transition: transform 0.3s ease;
}

.gallery-item img {
    width: 100%;
    height: 200px; 
    object-fit: cover; 
    transition: transform 0.3s ease;
}

.gallery-item-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); 
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: white;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.gallery-item:hover .gallery-item-overlay {
    opacity: 1;
}

.gallery-item:hover {
    transform: scale(1.05); 
}

.gallery-item:hover img {
    transform: scale(1.1); 
}

@media (max-width: 1024px) {
    .gallery-container {
        grid-template-columns: repeat(3, 1fr); 
        gap: 15px;
    }

    .gallery-item img {
        height: 180px; 
    }
}

@media (max-width: 768px) {
    .gallery-container {
        grid-template-columns: repeat(2, 1fr); 
        gap: 10px; 
    }

    .gallery-item img {
        height: 150px; 
    }
}

@media (max-width: 480px) {
    .gallery-container {
        grid-template-columns: repeat(2, 1fr); 
    }

    .gallery-item img {
        height: 120px; 
    }
}

</style>

<h1 class="pixel-art-title">¡nine lives of revenge!</h1>

<section id="galeria">
    <!-- Contenedor de la galería -->
    <div class="gallery-container">
        <div class="gallery-item" onclick="openFullSizeImage('image/inicio.png')">
            <img src="image/inicio.png" alt="Imagen 1 del juego">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/cap2.png')">
            <img src="image/cap2.png" alt="Captura de jugabilidad">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/3.png')">
            <img src="image/3.png" alt="Arte conceptual">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/4.png')">
            <img src="image/4.png" alt="Imagen 1 del juego">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/6.png')">
            <img src="image/6.png" alt="Captura de jugabilidad">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/5.png')">
            <img src="image/5.png" alt="Arte conceptual">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/7.png')">
            <img src="image/7.png" alt="Captura de jugabilidad">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/9.png')">
            <img src="image/9.png" alt="Arte conceptual">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/8.png')">
            <img src="image/8.png" alt="Imagen 1 del juego">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <div class="gallery-item" onclick="openFullSizeImage('image/10.png')">
            <img src="image/10.png" alt="Imagen 1 del juego">
            <div class="gallery-item-overlay">
            </div>
        </div>
        <!-- Añadir más imágenes aquí -->
    </div>
</section>

<!-- Contenedor de la imagen a tamaño completo -->
<div id="fullSizeImageContainer" class="full-size-image-container">
    <img id="fullSizeImage" src="" alt="Imagen completa">
</div>

<script>
    function openFullSizeImage(imageSrc) {
        const fullSizeImageContainer = document.getElementById('fullSizeImageContainer');
        const fullSizeImage = document.getElementById('fullSizeImage');
        fullSizeImage.src = imageSrc;
        fullSizeImageContainer.style.display = "flex"; 
    }

    function closeFullSizeImage() {
        const fullSizeImageContainer = document.getElementById('fullSizeImageContainer');
        fullSizeImageContainer.style.display = "none"; 
    }

    window.onclick = function(event) {
        const fullSizeImageContainer = document.getElementById('fullSizeImageContainer');
        if (event.target === fullSizeImageContainer) {
            closeFullSizeImage();
        }
    }
</script>

<?php include('includes/footer.php'); ?>
