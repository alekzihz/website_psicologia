
  <div id="cita_body">
    <br><br><br><br><br><br>
    <center>
      <form action="index.php?action=enviando" method="post">
        <div class="elem-group">
          <label for="name">Tu nombre</label>
          <input type="text" id="name" name="visitor_name" placeholder="Tu nombre" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
          <label for="email">Tu E-mail</label>
          <input type="email" id="email" name="visitor_email" placeholder="correo@email.com" required>
        </div>
        <div class="elem-group">
          <label for="department-selection">Tipo de Cita</label>
          <select id="department-selection" name="concerned_department" required>
              <option value="">Seleccione una opcion</option>
              <option value="Psicologia Para adultos">Psicologia Para adultos</option>
              <option value="Psicologia para parejas">Psicologia para parejas</option>
              <option value="Psicologia para niños y adolescentes">Psicologia para niños y adolescentes</option>
              <option value="Coaching">Coaching</option>
              <option value="Terapias antiestrés">Terapias antiestrés</option>
              <option value="Psicologia Online">Psicologia Online</option>
              <option value="Ayuda especializada">Ayuda Especializada</option>
              <option value="Terapias">Terapias</option>
              <option value="Otros">Otros</option>
          </select>
        </div>
        <div class="elem-group">
          <label for="message">Detalles</label>
          <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
        </div>
        <br><br>
        <button type="submit">Enviar Cita</button>
        
      </form>
      <br>
    </center>
    
</div>

