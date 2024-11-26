<?php
session_start();
$title = "Nine Lives of Revenge - Acerca de Nosotros";
$activePage = "nosotros";
include('includes/header.php');
?>

<style>
    .intro-text {
        font-size: 1.3em;
        line-height: 1.8;
        margin: 30px auto;
        max-width: 900px;
        text-align: justify;
        color: #fff; 
        font-family: 'Roboto', sans-serif; 
        background: none; 
        text-align: center;
        padding: 20px 10px;
        position: relative;
        font-weight: normal; 
    }

    .intro-text::before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 4px;
        width: 60%;
        background: linear-gradient(90deg, #ffa07a, #ff6347);
        border-radius: 2px;
    }

    .intro-text::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        height: 4px;
        width: 60%;
        background: linear-gradient(90deg, #ff6347, #ffa07a);
        border-radius: 2px;
    }

    h2 {
        font-family: 'Poppins', sans-serif; 
        font-size: 2em;
        text-align: center;
        color: #fff; 
        text-shadow: 0 0 5px #ff4500, 0 0 10px #ff6347, 0 0 20px #ff4500; 
        margin-bottom: 30px;
    }

    .team-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin: 40px 20px;
    }

    .team-member {
        background: #C3B091;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
        width: calc(25% - 20px);
        max-width: 250px;
        min-width: 200px;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    .team-member img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .team-member img:hover {
        transform: scale(1.1);
    }

    .team-member h3 {
        color:  #000000;
        margin: 10px 0 5px;
        font-size: 1.2em;
        font-weight: bold;
    }

    .team-member p {
        margin: 0;
        color: #000000;
        font-size: 1em;
    }

    @media (max-width: 800px) {
        .team-member {
            width: calc(50% - 20px);
        }
    }

    @media (max-width: 600px) {
        .team-member {
            width: 100%;
        }

        .show-text-btn {
            display: none; 
        }
    }

    @media (min-width: 601px) {
        .show-text-btn {
            display: none; 
        }
    }
</style>

<h1 class="pixel-art-title">¡Nine Lives of Revenge!</h1>

<!-- Introducción llamativa -->
<p class="intro-text">
    Somos un grupo de estudiantes apasionados de la <strong>Universidad Tecnológica del Centro de Izamal, Yucatán</strong>. Este proyecto refleja nuestro esfuerzo, creatividad y dedicación en la carrera de Ingeniería en Desarrollo y Gestión de Software. ¡Gracias por acompañarnos en esta aventura!
</p>

<!-- Título del equipo -->
<h2>Integrantes del Equipo</h2>

<div class="team-container">
<div class="team-member">
    <img src="image/reina.jpeg" alt="Foto de Reina Cutz">
    <h3>Reina Cutz</h3>
    <p>Encargada del sitio web de promoción del videojuego, del manual de usuario y colaboradora en el desarrollo del videojuego.</p>
</div>
    <div class="team-member">
    <img src="image/luis.jpeg" alt="Foto de Luis Chan">
    <h3>Luis Chan</h3>
    <p>Colaborador en el desarrollo del videojuego y del sitio web.</p>
</div>

    <div class="team-member">
    <img src="image/miguel.jpeg" alt="Foto de Miguel Novelo">
    <h3>Miguel Novelo</h3>
    <p>Colaborador en el desarrollo del videojuego.</p>
</div>
<div class="team-member">
    <img src="image/vitcar.jpeg" alt="Foto de Vitcar Puc">
    <h3>Vitcar Puc</h3>
    <p>Colaborador en el desarrollo del videojuego.</p>
</div>
</div>

<?php include('includes/footer.php'); ?>

<script>
    // Función para alternar la visibilidad del texto de introducción
    function toggleText() {
        const introText = document.querySelector('.intro-text');
        const button = document.querySelector('.show-text-btn');

        if (introText.style.display === 'none') {
            introText.style.display = 'block';
            button.textContent = 'Ocultar Introducción';
        } else {
            introText.style.display = 'none';
            button.textContent = 'Mostrar Introducción';
        }
    }
</script>
