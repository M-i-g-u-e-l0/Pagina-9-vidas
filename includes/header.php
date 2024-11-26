<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="image/mando2.png" type="image/png">
    <title><?php echo $title; ?></title> 

    <style>
    #particles-js {
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: -1; 
        pointer-events: none; 
    }

    nav {
        display: flex;
        justify-content: center; 
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 10px;
    }

    .menu {
        display: flex;
        justify-content: center;
        flex-grow: 1;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        margin: 0;
    }

    nav ul li {
        margin: 0 20px; 
    }

    nav ul li a {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    nav ul li i {
        font-size: 18px; 
        color: white;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        border-radius: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav a:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    nav a.active {
        background-color: rgba(0, 242, 255, 0.637);
        color: #ffd700;
    }

    nav a.active i {
        color: #ffd700;
    }

    footer {
        text-align: center;
        padding: 1em 0;
        background-color: rgba(0, 0, 0, 0.8);
        margin-top: auto;
    }

    h1, h2 {
        text-align: center;
    }

    section {
        padding: 100px 20px;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        nav {
            justify-content: flex-start; 
            padding: 0 22px; 
        }

        nav ul {
            justify-content: flex-start; 
            width: 100%; 
        }

        nav ul li a {
            gap: 0;
            padding: 10px;
            justify-content: center;
        }

        nav ul li a span {
            display: none; 
        }

        nav ul li i {
            font-size: 24px; 
        }

        nav ul li {
            margin: 0 10px; 
        }
    }
</style>


</head>
<body>

<!-- Contenedor para las partículas -->
<div id="particles-js"></div>

<header>
    <nav>
        <div class="menu">
        <ul>
    <li><a href="index.php" class="<?php if($activePage == 'index') {echo 'active';} ?>"><i class="fas fa-home"></i> <span>Inicio</span></a></li>
    <li><a href="sobre.php" class="<?php if($activePage == 'sobre') {echo 'active';} ?>"><i class="fas fa-gamepad"></i> <span>Sobre el Juego</span></a></li>
    <li><a href="galeria.php" class="<?php if($activePage == 'galeria') {echo 'active';} ?>"><i class="far fa-images"></i> <span>Galería</span></a></li>
    <li><a href="descargar.php" class="<?php if($activePage == 'descargar') {echo 'active';} ?>"><i class="fas fa-download"></i> <span>Descargar</span></a></li>
    <li><a href="nosotros.php" class="<?php if($activePage == 'nosotros') {echo 'active';} ?>"><i class="fas fa-users"></i> <span>Nosotros</span></a></li>
</ul>
        </div>
    </nav>
</header>

<!-- Audio Element for Background Music 
<audio id="background-audio" src="mp3/musica.mp3" autoplay loop preload="auto"></audio>

<script>
    // Reproducir el audio al cargar la página
    window.addEventListener('load', function() {
        var audio = document.getElementById('background-audio');

        // Intentar reproducir el audio
        audio.play().catch(function(error) {
            console.log('Error al intentar reproducir la música:', error);
        });
    });
</script>
-->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
// Configuración de partículas
particlesJS("particles-js", {
    "particles": {
        "number": {
            "value": 100,
            "density": {
                "enable": true,
                "value_area": 800
            }
        },
        "color": {
            "value": ["#ff0000", "#00ff00", "#0000ff", "#ffcc00", "#ff66cc"] 
        },
        "shape": {
            "type": "circle",
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
            "polygon": {
                "nb_sides": 5
            }
        },
        "opacity": {
            "value": 0.5,
            "random": false
        },
        "size": {
            "value": 6, 
            "random": true
        },
        "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 2 
        },
        "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
            }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "repulse" 
            },
            "onclick": {
                "enable": true,
                "mode": "push" 
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 400,
                "line_linked": {
                    "opacity": 1
                }
            },
            "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
            },
            "repulse": {
                "distance": 100, 
                "duration": 0.4
            },
            "push": {
                "particles_nb": 4 
            },
            "remove": {
                "particles_nb": 2
            }
        }
    },
    "retina_detect": true
});
</script>

</body>
</html>
