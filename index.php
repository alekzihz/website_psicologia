<?php

$parametro = $_GET['action'] ?? null;

//echo $parametro;

 switch($parametro){
     case "index":
       require __DIR__. '/resource_main.php';
       break;
     case "contacto":
       require __DIR__. '/resource_contacto.php';
       break;
     case "cita":
       require __DIR__. '/resource_appointment.php';
       break;
     case "enviando":
        require __DIR__. '/resource_appointment_enviar.php';
        break;
     case "servicios":
        require __DIR__. '/resource_offers.php';
        break;
     case "Yo":
        require __DIR__. '/resource_aboutme.php';
        break;

        default:
        require __DIR__.'/resource_main.php';


 }

?>