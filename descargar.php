<?php
$title = "Nine Lives of Revenge - Descargar"; 
$activePage = "descargar"; 
include('includes/header.php'); 
?>

<style>
    #descargar {
    display: flex;
    justify-content: space-between;
    align-items: stretch; 
    padding: 20px;
    max-width: 900px; 
    margin: 0 auto;
}

    .content {
        flex: 1;
        margin-right: 10px;
        padding: 20px;
        background: #2c3e50;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        backdrop-filter: blur(8px);
        animation: fadeIn 1s ease-in;
    }

    .content p {
        font-size: 17px;
        line-height: 1.6;
        margin-bottom: 20px;
        text-align: justify;
    }

    .price-container {
        text-align: center;
        margin-bottom: 20px;
    }

    .badge {
        display: inline-block;
        background-color: #ff5050;
        color: white;
        padding: 6px 10px;
        font-size: 12px;
        border-radius: 20px;
        animation: pulse 1.5s infinite;
        margin-left: 5px;
        box-shadow: 0 3px 8px rgba(255, 80, 80, 0.6);
        position: absolute;
        top: 10px;
        right: 15px;
    }

    #buyBtn {
        padding: 10px 30px;
        font-size: 18px;
        background: linear-gradient(135deg, #28a745, #56d364);
        color: white;
        border: none;
        border-radius: 40px;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 3px 10px rgba(56, 211, 100, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    #buyBtn i {
        font-size: 18px;
    }

    #buyBtn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(56, 211, 100, 0.7);
    }

    #manualBtn {
        padding: 10px 30px;
        font-size: 18px;
        background: linear-gradient(135deg, #007bff, #66aaff); 
        color: white;
        border: none;
        border-radius: 40px;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 3px 10px rgba(56, 130, 255, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 20px;
    }

    #manualBtn i {
        font-size: 18px;
    }

    #manualBtn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(56, 130, 255, 0.7);
    }

    .image-container {
    flex: 1;
    margin-left: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: slideIn 1s ease-out;
}

.image-container img {
    width: 100%; 
    height: 100%; 
    object-fit: cover; 
    border-radius: 10px; 
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4); 
    background-color: transparent; 
    border: 3px solid rgba(200, 200, 200, 0.8); 
    opacity: 1; 
}


@media (max-width: 768px) {
    #descargar {
        flex-direction: column; 
        align-items: center; 
    }

    .image-container {
        width: 100%; 
        margin-left: 0; 
        margin-top: 20px; 
    }

    .image-container img {
        width: 100%; 
        height: auto; 
    }

    .content {
        width: 90%; 
        margin: 0 auto;
        padding: 20px; 
        max-width: 600px; 
    }

}

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideIn {
        from { transform: translateX(100px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
</style>

<h1 class="pixel-art-title">¡Nine Lives of Revenge!</h1>

<section id="descargar">
    <div class="content">
        <br>
        <br>
        <p>¡Descarga ahora Nine Lives of Revenge y prepárate para enfrentarte a desafíos únicos! Embárcate en una aventura estratégica donde cada decisión cuenta, derrota a los rivales de la mafia y demuestra que eres más astuto que ellos. ¿Tienes lo que se necesita para desatar tu venganza?</p>

        <div class="price-container">
            <button id="manualBtn">
                <i class="fas fa-file-download"></i>
                Descargar Manual
            </button>
            <span class="badge">Oferta limitada</span>
        </div>

        <button id="buyBtn">
            <i class="fas fa-download"></i>
            ¡Descargar Juego!
        </button>
    </div>

    <div class="image-container">
        <img src="image/gato.jpg" alt="Imagen de CR7">
    </div>
</section>

<script>
    const buyBtn = document.getElementById('buyBtn');
    buyBtn.addEventListener('click', () => {
        const url = 'manual/Nine Lives of Revenge.zip'; 
        const a = document.createElement('a');
        a.href = url;
        a.download = 'Nine Lives of Revenge.zip'; 
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });

    const manualBtn = document.getElementById('manualBtn');
    manualBtn.addEventListener('click', () => {
        const url = 'manual/Manual_Nine_Lives_Of_Revenge.pdf'; 
        const a = document.createElement('a');
        a.href = url;
        a.download = 'Manual_Nine_Lives_Of_Revenge.pdf'; 
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
</script>


<?php include('includes/footer.php'); ?>
