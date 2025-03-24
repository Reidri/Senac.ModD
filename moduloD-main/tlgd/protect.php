<?php 

if(!isset($SESSION)){
    session_start();
}

if (!isset($_SESSION['id'])) {
    echo "<div id='alerta' style='
                padding: 15px; 
                background: #ff4d4d; 
                color: white; 
                border-radius: 5px; 
                position: absolute; 
                top: 50%; 
                left: 50%; 
                transform: translate(-50%, -50%); 
                text-align: center; 
                font-family: Arial, sans-serif; 
                box-shadow: 0px 0px 10px rgba(0,0,0,0.2);'>
            <p style='margin: 0; font-size: 16px;'>⚠ Você não tem acesso a esta página!</p>
            <button onclick='window.location.href=\"index.php\"' style='
                margin-top: 10px; 
                padding: 8px 12px; 
                background: white; 
                color: #ff4d4d; 
                border: none; 
                border-radius: 3px; 
                cursor: pointer; 
                font-weight: bold;'>
                Voltar
            </button>
          </div>";
    exit; // Para interromper a execução do restante do código
}
?>

