<?php
$title = "Nine Lives of Revenge - Sobre el Juego";
$activePage = "sobre";
include('includes/header.php');
?>

<link rel="stylesheet" href="css/sobre.css"> 

<h1 class="pixel-art-title">¡Nine Lives of Revenge!</h1>

<section id="sobre">
    <div class="info-box">
        <p id="truncated-text">
        ¡Adéntrate en un mundo de acción y venganza en Nine Lives of Revenge! En este juego de aventura, controlas a Lucius Bloodclaw, un ex asesino de la mafia que lucha por salvar a su amada Elara Moonwhisker. 
            <span id="extra-text" style="display: none;">
            El mundo en el que te sumerges está lleno de animales antropomórficos, pero la oscuridad lo domina. Lucius debe enfrentarse a hordas de enemigos y poderosos jefes para rescatar a Elara, mientras explora una ciudad que lo quiere ver muerto.
            </span>
        </p>
        <button id="toggle-text-btn" class="toggle-btn" style="display: none;">Leer más</button>
    </div>
    
    <div class="features">
    <div class="feature" onclick="location.href='personajes.php'">
    <i class="fa fa-solid fa-paw player-icon"></i>
    <h3>CONOCE A NUESTROS PERSONAJES</h3>
    <p>Sumérgete en las historias de nuestros personajes y descubre el papel que desempeñan en esta emocionante aventura.</p>
</div>
<div class="feature" onclick="location.href='mapas.php'">
    <i class="fa fa-map map-icon"></i>
    <h3>DESCUBRE NUESTROS ESCENARIOS</h3>
    <p>Adéntrate en mapas diseñados para ofrecer experiencias inmersivas y desafiantes en cada combate.</p>
</div>

    </div>
</section>

<!-- JavaScript para el comportamiento de leer más/menos -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggle-text-btn');
        const extraText = document.getElementById('extra-text');
        const mediaQuery = window.matchMedia('(max-width: 768px)');

        function handleScreenChange(e) {
            if (e.matches) {
                toggleBtn.style.display = 'block';
                extraText.style.display = 'none'; 
                toggleBtn.addEventListener('click', toggleText);
            } else {
                toggleBtn.style.display = 'none';
                extraText.style.display = 'inline';
            }
        }

        function toggleText() {
            if (extraText.style.display === 'none') {
                extraText.style.display = 'inline';
                toggleBtn.textContent = 'Mostrar menos';
            } else {
                extraText.style.display = 'none';
                toggleBtn.textContent = 'Leer más';
            }
        }

        handleScreenChange(mediaQuery);

        mediaQuery.addEventListener('change', handleScreenChange);

        window.addEventListener('resize', function() {
            handleScreenChange(mediaQuery);
        });
    });
</script>

<style>
    .info-box {
        background: rgba(128, 128, 128, 0.15);
        border: 2px solid #ffcc00; 
        padding: 20px;
        margin-bottom: 40px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
        backdrop-filter: blur(5px); 
        text-align: justify;
    }

    .info-box p {
        font-size: 18px;
        line-height: 1.6;
        color: #fff; 
    }

    .toggle-btn {
        background-color: #ffcc00;
        border: none;
        padding: 10px 20px;
        border-radius: 25px; 
        cursor: pointer;
        margin-top: 10px;
        color: #000;
        font-weight: bold;
        font-size: 16px;
        transition: background-color 0.3s, transform 0.3s; 
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); 
    }

    .toggle-btn:hover {
        background-color: #ffd633; 
        transform: scale(1.05); 
    }

    .toggle-btn:active {
        transform: scale(0.98); 
    }

    .features {
        display: flex;
        justify-content: center; 
        align-items: center;
        flex-wrap: wrap;
        gap: 30px;
        text-align: center; 
        margin-top: 30px;
    }

    .feature {
        background-color: #2c3e50; 
        border: 2px solid transparent;
        border-radius: 10px;
        padding: 20px;
        width: 250px; 
        text-align: center;
        cursor: pointer;
        transition: transform 0.3s, box-shadow 0.3s, border 0.3s;
        color: #fff; 
    }

    .feature:hover {
        transform: scale(1.05);
        background-color: #1abc70; 
        border: 2px solid #ffcc00; 
        box-shadow: 0 6px 15px rgba(255, 255, 255, 0.5);
    }

    .feature i {
        font-size: 40px;
        margin-bottom: 10px;
        color: #ffcc00; 
    }

    .feature h3 {
        font-size: 18px;
        color: #fff;
    }

    .feature p {
        font-size: 14px;
        color: #dcdcdc; 
    }

    @media (max-width: 768px) {
        .info-box p {
            display: block;
        }

        .features {
            flex-direction: column; 
            align-items: center;    
            padding: 0 10px;       
            gap: 15px;              
        }

        .feature {
            width: 90%;
            margin-bottom: 10px; 
        }

        #extra-text {
            display: none; 
        }
    }

    @media (min-width: 769px) {
        #toggle-text-btn {
            display: none; 
        }

        #extra-text {
            display: inline; 
        }
    }
</style>

<?php include('includes/footer.php'); ?>
