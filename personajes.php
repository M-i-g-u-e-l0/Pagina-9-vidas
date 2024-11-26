<?php
$title = "Nine Lives of Revenge";
$activePage = "jugadores";
include('includes/header.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    #jugadores {
        display: flex;
        flex-wrap: wrap;
        justify-content: center; 
        padding: 20px;
    }

.player-card {
    background-color: #3498db;
    border-radius: 10px;
    padding: 15px;
    margin: 10px;
    text-align: center;
    width: 300px; 
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s;
    cursor: pointer;
}


    .player-card:hover {
        transform: scale(1.05); 
    }

    .player-card h3 {
        color: #ecf0f1; 
    }

    .player-card p {
        color: #ffffff; 
        margin: 0; 
    }

    .player-icon {
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
        background-color: #2c3e50; 
        border-radius: 10px;
        padding: 20px;
        text-align: left; 
        position: relative;
        display: flex; 
        align-items: center; 
        max-width: 800px; 
        gap: 20px; 
        color: #ecf0f1; 
    }

    .modal img {
    width: 250px; 
    height: 250px; 
    object-fit: contain; 
    border-radius: 10px; 
    image-rendering: pixelated; 
}

    .close {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 25px;
        color: #ecf0f1; 
        cursor: pointer;
    }

    .info-table {
        width: 100%; 
        border-collapse: collapse; 
        color: #ecf0f1; 
    }

    .info-table th, .info-table td {
        padding: 10px; 
        text-align: left;
        border: 1px solid #ecf0f1; 
    }

    .info-table th {
        color: #ffffff; 
    }

    .info-table tr:nth-child(even) {
        background-color: #34495e; 
    }

    .info-table tr:nth-child(odd) {
        background-color: #2c3e50; 
    }

    .info-table .name-row {
        background-color: #3498db; 
        color: #ffffff;
        font-weight: bold; 
        text-align: center; 
    }

    .info-table td {
        text-align: center; 
    }
    .btn-back:hover {
    color: #ecf0f1; 
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
@media (max-width: 768px) {
    .modal-content {
        flex-direction: column; 
        padding: 10px;
        max-width: 90%; 
        gap: 5px; 
    }

    .modal img {
        width: 78%; 
        height: auto; 
        margin: 5%; 
    }

    .info-table {
        width: 95%; 
        margin: 0 auto; 
        padding: 10px; 
        border-spacing: 5px; 
        margin-bottom: 15px;
    }

    .info-table th, .info-table td {
        padding: 5px;
    }

    .btn-back {
        font-size: 16px; 
        padding: 10px 20px;
        margin-left: 130px; 
    }

    .circle-icon {
        width: 30px; 
        height: 30px;
        font-size: 16px; 
    }
}

@media (max-width: 480px) {
    .modal-content {
        padding: 5px;
    }

    .player-card {
        width: 90%; 
    }
}

.fa-paw {
    transform: scale(1.1); 
}


</style>

<h1 class="pixel-art-title">Lista de Personajes</h1>

<div style="margin-top: 20px; display: flex; justify-content: flex-start;">
    <a href="sobre.php" class="btn-back" style="text-decoration: none; color: white; padding: 10px 20px; font-size: 16px; display: inline-flex; align-items: center;">
        <span class="circle-icon">
            <i class="fa fa-arrow-left"></i>
        </span>
        Regresar
    </a>
</div>

<section id="jugadores">
<div class="player-card" onclick="openModal('modal1')">
    <i class="fa fa-solid fa-paw player-icon" aria-hidden="true"></i>
    <h3>Lucius Bloodclaw</h3>
    <p>Un asesino retirado, obligado a enfrentar su pasado por amor.</p>
</div>
    <div class="player-card" onclick="openModal('modal2')">
        <i class="fa fa-solid fa-paw player-icon" aria-hidden="true"></i>
        <h3>Dante Grimfang</h3>
        <p>El antiguo amigo de Lucius, convertido en su mayor enemigo.</p>
    </div>
    <div class="player-card" onclick="openModal('modal3')">
        <i class="fa fa-solid fa-paw player-icon" aria-hidden="true"></i>
        <h3>Viktor Steeljaw</h3>
        <p>Un leal protector de Dante y jefe de la mafia.</p>
    </div>
    <div class="player-card" onclick="openModal('modal4')">
        <i class="fa fa-solid fa-paw player-icon" aria-hidden="true"></i>
        <h3>Tricktail</h3>
        <p>Un astuto zorro encargado de las trampas de la mafia.</p>
    </div>
    <div class="player-card" onclick="openModal('modal5')">
        <i class="fa fa-solid fa-paw player-icon" aria-hidden="true"></i>
        <h3>Cleverfang</h3>
        <p>El estratega de la mafia, siempre un paso adelante.</p>
    </div>
    <div class="player-card" onclick="openModal('modal6')">
    <i class="fa fa-solid fa-paw player-icon" aria-hidden="true"></i>
    <h3>Raccoonshadow</h3>
    <p>Un sigiloso ladrón que utiliza su astucia para engañar a sus enemigos.</p>
</div>
</section>


<div id="modal1" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal1')">&times;</span>
        <img src="image/lucius.png" alt="Lucius Bloodclaw">
        <div>
            <table class="info-table">
                <tr class="name-row">
                    <td colspan="2">Lucius Bloodclaw</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td class="justified">Lucius es el protagonista de esta historia, un gato antes conocido como el "Garra Sangrienta". Tras abandonar la mafia para vivir con su esposa Elara, se ve obligado a regresar al mundo del crimen cuando ella es secuestrada. Su habilidad en combate y su deseo de redención lo convierten en una fuerza imparable.</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal2')">&times;</span>
        <img src="image/dante.png" alt="dante">
        <div>
            <table class="info-table">
                <tr class="name-row">
                    <td colspan="2">Dante Grimfang</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>Dante, fue el mejor amigo y compañero de armas de Lucius. Tras su retiro, Dante lo consideró un acto de traición personal. Ahora lidera la mafia y se ha convertido en la némesis de Lucius, diseñando cada obstáculo para evitar que rescate a Elara.</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal3')">&times;</span>
        <img src="image/viktor.png" alt="viktor">
        <div>
            <table class="info-table">
                <tr class="name-row">
                    <td colspan="2">Viktor Steeljaw</td>
                </tr>
                <tr>
                    <th>Descripción</th>
                    <td>Viktor es el jefe de la mafia, se enfrenta a Lucius en momentos críticos especialmente en el ultimo nivel, poniendo a prueba las habilidades estratégicas de los jugadores.</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="modal4" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal4')">&times;</span>
        <img src="image/fox.png" alt="fox">
        <div>
            <table class="info-table">
                <tr class="name-row">
                    <td colspan="2">Tricktail</td>
                </tr>
                <tr>
                    <th>Tipo de enemigo</th>
                    <td>NPC Rival</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="modal5" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal5')">&times;</span>
        <img src="image/perro3.png" alt="perro">
        <div>
            <table class="info-table">
                <tr class="name-row">
                    <td colspan="2">Cleverfang</td>
                </tr>
                <tr>
                    <th>Tipo de enemigo</th>
                    <td>NPC Rival</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div id="modal6" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modal6')">&times;</span>
        <img src="image/mapache.png" alt="mapache">
        <div>
            <table class="info-table">
                <tr class="name-row">
                    <td colspan="2">Raccoonshadow</td>
                </tr>
                <tr>
                    <th>Tipo de enemigo</th>
                    <td>NPC Rival</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'flex';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    window.onclick = function(event) {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }
</script>

<?php include('includes/footer.php'); ?>
