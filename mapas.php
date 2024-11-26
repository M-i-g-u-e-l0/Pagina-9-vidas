<?php
$title = "Nine Lives of Revenge";
$activePage = "Mapas";
include('includes/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    #mapas {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 20px;
    }

    .map-card {
    background-color: #e74c3c;
    border-radius: 15px;
    padding: 15px;
    margin: 10px;
    text-align: center;
    width: 300px; 
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
}

@media (max-width: 768px) {
    .map-card {
        width: 90%; 
        max-width: 300px; 
        margin: 10px auto; 
    }
}

    .map-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 30px rgba(0, 0, 0, 0.3);
    }

    .map-card h3 {
        color: #ecf0f1;
        margin: 5px 0;
    }

    .map-card p {
        color: #ffffff;
        margin: 0;
    }

    .map-icon {
        font-size: 50px;
        color: #ecf0f1;
        margin-bottom: 10px;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(5px);
    }

    .modal-content {
        background-color: #34495e;
        border-radius: 15px;
        padding: 40px;
        text-align: center;
        position: relative;
        max-width: 1200px;
        max-height: 500px;
        overflow: auto;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
    }

    .modal img {
        width: 150px;
        height: auto;
        max-height: 150px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
        cursor: pointer;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 24px;
        color: #ecf0f1;
        cursor: pointer;
        z-index: 1001;
        transition: transform 0.3s;
    }

    .close:hover {
        transform: scale(1.1);
    }

    .modal-text {
        background-color: rgba(255, 255, 255, 0.1);
        border: 2px solid #9b59b6;
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
        color: #ecf0f1;
        font-family: 'Arial', sans-serif;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        font-size: 18px;
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


    .btn-back {
    background: linear-gradient(135deg, #8e44ad, #9b59b6); 
    border-radius: 8px; 
    padding: 10px 20px;
    color: white; 
    font-size: 16px;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    transition: transform 0.3s, box-shadow 0.3s, background 0.3s; 
    margin-left: 130px; 
    cursor: pointer; 
}

.btn-back:hover {
    background: linear-gradient(135deg, #6c3483, #7d3c98); 
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); 
    transform: translateY(-3px); 
}

.circle-icon {
    background-color: white;
    color: #9b59b6; 
    border-radius: 50%; 
    display: inline-block;
    width: 30px; 
    height: 30px; 
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 10px; 
    transition: background 0.3s, color 0.3s; 
}

.btn-back:hover .circle-icon {
    background-color: #7d3c98; 
    color: white; 
}

.circle-icon i {
    font-size: 16px; 
}
</style>

<h1 class="pixel-art-title">MAPAS DEL JUEGO</h1>

<div style="margin-top: 20px; display: flex; justify-content: flex-start;">
    <a href="sobre.php" class="btn-back" style="text-decoration: none; color: white; padding: 10px 20px; font-size: 16px; display: inline-flex; align-items: center;">
        <span class="circle-icon">
            <i class="fa fa-arrow-left"></i>
        </span>
        Regresar
    </a>
</div>
<section id="mapas">
    <div class="map-card" onclick="openModal('modal1')">
        <i class="fa fa-map map-icon" aria-hidden="true"></i>
        <h3>Mapa 1</h3>
    </div>

    <div class="map-card" onclick="openModal('modal2')">
        <i class="fa fa-map map-icon" aria-hidden="true"></i>
        <h3>Mapa 2</h3>
    </div>

    <div class="map-card" onclick="openModal('modal3')">
        <i class="fa fa-map map-icon" aria-hidden="true"></i>
        <h3>Mapa 3</h3>
    </div>

    <div class="map-card" onclick="openModal('modal4')">
        <i class="fa fa-map map-icon" aria-hidden="true"></i>
        <h3>Mapa 4</h3>
    </div>

    <div class="map-card" onclick="openModal('modal5')">
        <i class="fa fa-map map-icon" aria-hidden="true"></i>
        <h3>Mapa 5</h3>
    </div>

</section>

<!-- Modales para cada mapa -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal1')">&times;</span>
        <img src="image/mapa1.png" alt="Mapa 1" onclick="openFullSizeImage('image/mapa1.png')">
        <p class="modal-text">
        Nivel 1-1
        </p>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal2')">&times;</span>
        <img src="image/mapa2.png" alt="Mapa 2" onclick="openFullSizeImage('image/mapa2.png')">
        <p class="modal-text">
        Nivel 1-2
        </p>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal3')">&times;</span>
        <img src="image/mapa3.png" alt="Mapa 3" onclick="openFullSizeImage('image/mapa3.png')">
        <p class="modal-text">
        Nivel 1-3
        </p>
    </div>
</div>

<div id="modal4" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal4')">&times;</span>
        <img src="image/mapa4.png" alt="Mapa 4" onclick="openFullSizeImage('image/mapa4.png')">
        <p class="modal-text">
        Nivel 1-4
        </p>
    </div>
</div>

<div id="modal5" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal5')">&times;</span>
        <img src="image/mapa5.png" alt="Mapa 5" onclick="openFullSizeImage('image/mapa5.png')">
        <p class="modal-text">
        Nivel 1-5
        </p>
    </div>
</div>

<style>
.modal img {
    width: 300px; 
    height: 200px; 
    object-fit: cover; 
    border-radius: 10px;
    margin-bottom: 20px;
    cursor: pointer;
}
</style>


<!-- Contenedor de la imagen a tamaño completo -->
<div id="fullSizeImageContainer" class="full-size-image-container" onclick="closeFullSizeImage()">
    <img id="fullSizeImage" src="" alt="Imagen completa">
</div>

<script>
    function openModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.style.display = "flex"; 
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = "none"; 
    }

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
        const modals = document.getElementsByClassName("modal");
        for (let i = 0; i < modals.length; i++) {
            if (event.target == modals[i]) {
                modals[i].style.display = "none"; 
            }
        }
    }
</script>

<?php
include('includes/footer.php');
?>
