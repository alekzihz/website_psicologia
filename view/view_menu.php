<nav>
    <ul>
        <li><a href="index.php#inicio">Inicio</a></li>
        <li><a href="index.php#Yo">Sobre Mí</a></li>
        <li class="submenu"><a href="#servicios">Servicios</a>
            <ul>
                <li><a>Terapias</a></li>
                <li><a>Coaching</a></li>
                <li><a>Ayuda Especializada</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="index.php#Portfolio">Ofrecemos</a>
            <ul>
                <li><a>Psicologia para Adultos</a></li>
                <li><a>Psicologia para parejas</a></li>
                <li><a>Psicologia para niños y adolescentes</a></li>
                <li><a>Coaching</a></li>
                <li><a> Terapia antiestrés</a></li>
                <li><a>Psicologia Online</a></li>
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