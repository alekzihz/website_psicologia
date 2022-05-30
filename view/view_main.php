    <main>
        <section class="services_contenedor" id="servicios">
            <br><br><br><br><br><br><br>
            <h2 class="subtitulo">Servicios</h2>
            <div class="contenedor-servicio">
                <?php require_once __DIR__.'/../controller/controller_services.php';?>
                
            </div>
            
        </section>
        <section class="galeria" id="Portfolio">
            <br><br><br><br>
            <div class="contenedor">
                <h2 class="subtitulo">Ofrecemos</h2>
                    <div class="contenedor-imagen" id ="omg">
                        <?php require_once __DIR__.'/../controller/controller_provide.php';?>   
                    </div>  
            </div>
        </section>
      
        <section class="contenedor" id="Yo"> 
            <br><br><br>
            
            <h2 class="subtitulo">Acreditaciones</h2>
                <div class="contenedor-imagen">
                    <?php require_once __DIR__.'/../controller/controller_education.php';?>   
                </div> 
        </section>
    </main>
    <footer id="Contacto">
        <?php require_once __DIR__.'/../controller/controller_footer.php';?>   
        &copy;Derechos Reservados <img/>
        · 
        <a href="" target="_blank" rel="noopener">Aviso legal</a>
        · 
        <a href="" target="_blank" rel="noopener">Politica de Privacidad</a>
    </footer>
