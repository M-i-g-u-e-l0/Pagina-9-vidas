<?php
session_start();

$title = "Nine Lives of Revenge - Inicio"; 
$activePage = "index"; 
include('includes/header.php');
?>

<link rel="stylesheet" href="css/index.css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->


<h1 class="pixel-art-title">¡Nine Lives of Revenge!</h1>

<style>
    .video-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .main-video {
        width: 100%;
        height: auto;
        border-radius: 10px;
        display: block;
        margin: 0 auto;
        position: relative;
        z-index: 10;
    }

    @media (max-width: 600px) {
        .main-video {
            width: 90%;
            margin: 0 auto;
            display: block;
        }
    }

    @media (min-width: 1200px) {
        .main-video {
            width: 80%;
            height: auto;
        }
    }

    .small-screen-container {
        display: none;
        text-align: center;
        margin-top: 20px;
    }

    .small-screen-message {
        font-size: 20px;
        color: #2ecc71;
        font-weight: bold;
        font-family: 'Arial', sans-serif;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        margin-bottom: 10px;
    }

    .magic-button {
        background: linear-gradient(135deg, #8e44ad, #3498db);
        color: white;
        border: none;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 30px;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .magic-button:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 600px) {
        .small-screen-container {
            display: block;
        }
    }

    .fireworks-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        pointer-events: none;
        z-index: 9999;
    }

    .bullet {
        position: absolute;
        width: 15px;
        height: 15px;
        background-color: #2c3e50;
        animation: shootUp 4s ease-out forwards;
    }

    @keyframes shootUp {
        0% {
            transform: translateY(100vh);
            opacity: 1;
        }
        100% {
            transform: translateY(-100vh);
            opacity: 0;
        }
    }

    .bullet.round {
        border: 3px solid #f7ff00;
        border-radius: 50%;
    }

    .bullet.square {
        border: 3px solid #00ff00;
        border-radius: 0%;
    }
</style>

<br>
<div class="video-container" style="margin-bottom: 30px;">
    <video class="main-video" width="1920" height="1080" controls>
        <source src="video/Nine lives of revenge.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de video.
    </video>
</div>

<div class="small-screen-container">
    <button class="magic-button" onclick="launchBullets()">¡Disparar balas!</button>
</div>

<div class="fireworks-container" id="fireworks-container"></div>

<script>
    function launchBullets() {
        const fireworksContainer = document.getElementById('fireworks-container');
        fireworksContainer.innerHTML = '';

        for (let i = 0; i < 15; i++) {
            const bullet = document.createElement('div');
            bullet.className = 'bullet';
            const isRound = Math.random() < 0.5;
            bullet.classList.add(isRound ? 'round' : 'square');

            bullet.style.left = Math.random() * 100 + 'vw';
            bullet.style.animationDuration = Math.random() * 2 + 3 + 's';
            fireworksContainer.appendChild(bullet);
        }

        setTimeout(() => {
            fireworksContainer.innerHTML = '';
        }, 5000);
    }
</script>

<?php include('includes/footer.php'); ?>
