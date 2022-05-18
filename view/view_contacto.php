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
                                include_once __DIR__.'/../controller/controller_menu.php';
                        ?>
                </div>
               
                
        </header>
        <div id="contacto_body">
                <center>
                        <br><br><br><br><br><br><br><br>
                        <h4 style="margin-top: -10px">CONTACTO</h4>
                                <p>
                                        Para cualquier duda y/o sugerencia <br>pongase en contacto a través de los medios facilitados abajo.
                                <br>
                                </p>
                        
                        <div><br><br><br><br></div>
                        

                        <!-- Datos de contacto -->
                        <div class="datos">
                        <p style="font-size: 14px;">
                        correo: <b style="color: green;"> <a href="mailto:xxxx.website@gmail.com"> xxx.website@gmail.com </a></b><br>
                        teléfono: <b style="color: green;"> <a href="tel:+34123456789"> +34 123456789 </a></b><br>
                        </p>
                        </div>
                </center>
                <div><br></div>
                <h5 style="text-align: center; color: green;"> Dirección: </h5>
                <address id="direccion" style="text-align: center;">
                        xxxx, 27<br>
                        12345, xxx xxx <br>
                        Granada, España<br>
                        "xxxx xxxxxx".
                </address>
        </div>
       
</body>

<footer id="Contacto">
                <br>
                <?php require_once __DIR__.'/../controller/controller_footer.php';?>   
                &copy;Derechos Reservados <img/>
                · 
                <a href="" target="_blank" rel="noopener">Aviso legal</a>
                · 
                <a href="" target="_blank" rel="noopener">Politica de Privacidad</a>
        </footer>

