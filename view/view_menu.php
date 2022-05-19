<nav>
    <ul>
        <li><a href="index.php#inicio">Inicio</a></li>
        <li><a href="index.php?action=Yo">Sobre Mí</a></li>
        <li class="submenu"><a href="#servicios">Servicios</a>
            <ul>
                <li><a href="index.php?action=servicios&id=1">Terapias</a></li>
                <li><a href="index.php?action=servicios&id=2">Coaching</a></li>
                <li><a href="index.php?action=servicios&id=3">Ayuda Especializada</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="index.php#Portfolio">Ofrecemos</a>
            <ul>
                <li><a href="index.php?action=servicios&id=4">Psicologia para Adultos</a></li>
                <li><a href="index.php?action=servicios&id=5">Psicologia para parejas</a></li>
                <li><a href="index.php?action=servicios&id=6">Psicologia para niños y adolescentes</a></li>
                <li><a href="index.php?action=servicios&id=2">Coaching</a></li>
                <li><a href="index.php?action=servicios&id=8"> Terapia antiestrés</a></li>
                <li><a href="index.php?action=servicios&id=9">Psicologia Online</a></li>
            </ul>
        </li>
        <li class=submenu><a href="index.php?action=contacto">Contactos</a></li>
    </ul>
</nav>

<script>
    
    $(".submenu").click(
        function (){
            $(this).children("ul").slidedown();
    });


</script>