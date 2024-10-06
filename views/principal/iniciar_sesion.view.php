<!-- Pagina principal de iniciar sesion -->

<?php


//require 'controllers/database.php';


  



//?>





<div class="contenedor card centrar">
  <div class="card-group">
    <div class="card">
      <!-- Formulario de iniciar sesion -->
      <div class="card-body">
        <h5 class="card-title centrar letra1"><b>Iniciar Sesión</b></h5>
        <div class="card-group">
          <div class="card">
            <form action="?c=Landing&a=dashboard" method="post" class="formularioiniciar">
              <div class="form-group centrar">
                <label for="exampleInputEmail1"><b>Nombre Usuario</b></label>
                <input type="text" class="form-control" 
                name="nombre_usuario"
                 placeholder="Nombre Usuario" required> 
              </div>
              <div class="form-group centrar">
                <label for="exampleInputPassword1 letra"><b>Contraseña</b></label>
                <input type="password" class="form-control" name="contraseña_usuario" placeholder="Contraseña" required>
              </div>
              <div class="centrar">
                 <input class="btn-primary" type="submit" value="Iniciar Sesion" name="iniciar">
              </div>
              <br>
              <div class="centrar"><a href="?c=Landing&a=olvido_contraseña" role="button" aria-pressed="true">¿Olvido su contraseña?</a></div>
              <div><br></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>