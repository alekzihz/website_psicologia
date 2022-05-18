<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Psicóloga | María Lozano</title>
    <link rel="icon" type="image/jpg" href="img/Fondo.jpg">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,300;1,400&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="js/jquery-3.6.0.min.js"></script>
</head>

<body> 
        <header class="header" id="Inicio">
                <img src="img/menu.svg" alt="" class="btn_menu">
                <div id="logo">
                        <a href="index.php"><img src="img/fondo.png">Psicóloga | María Lozano</a>
                </div>  
        
                <div id="menu" class="menu">
                        <?php
                                include_once __DIR__.'/controller/controller_menu.php';
                        ?>
                </div>
               
                
        </header>

        <div id="inicio" class="contenedor-head">
       
                <?php
                
                        include_once __DIR__.'/controller/controller_cover.php';
                ?>
	</div>

        

        <?php
                include_once __DIR__. '/controller/controller_main.php';
        ?>

        

        
      
</body>

