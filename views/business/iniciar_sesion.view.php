<!-- Pagina principal de iniciar sesion -->

<?php


//require 'controllers/database.php';


  



//?>





<div class="contenedor card centrar">
  <div class="card-group">
    <div class="card">
      <!-- Formulario de iniciar sesion -->
      <div class="card-body">
        <h5 class="card-title centrar letra1"><b>Formulario Iniciar Sesión</b></h5>
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
  <!-- Apartado de mision / vision / historia / proyectos -->
  <div class="card-group">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title centrar letra1"><b>MISIÓN</b></h5>
        <p class="card-text palabra1 letra3">La Asociación ASOINCO, tiene como misión apoyar a la comunidad en acciones que conlleven a disminuir la desnutrición, fomentar los espacios educativos y aportar soluciones en todo lo relacionado con el medio ambiente reforzando la formación personal las actitudes en la convivencia y en la solidaridad; despertando conciencia en la ciudadanía para que todos participemos en este proceso de desarrollo.<br><br><a href="?c=Landing&a=mision">Conoce más Aquí.</a></p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title centrar letra1"><b>VISIÓN</b></h5>
        <p class="card-text palabra1 letra3">Ser reconocidos como una organización comunitaria participativa que fortalece el tejido social y aporta en el proceso de desarrollo de la localidad para alcanzar el sueño de un país que actúe con justicia social y promueva la paz.<br><br> <a href="?c=Landing&a=vision">Conoce más Aquí.</a>
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title centrar letra1"><b>HISTORIA</b></h5>
        <p class="card-text">
        <p class="card-text letra3 palabra1">
          La Asociación De Integración Comunitaria ASOINCO, nace por la necesidad de enfrentar y solucionar 3 grandes problemáticas de la comunidad ubicada en la UPZ 49 como son: educación, medio ambiente y la desnutrición. Temas que serian ratificados como prioritarios en los encuentro ciudadanos.<br><br><a href="?c=Landing&a=historia">Conoce más Aquí.</a></p>
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title centrar letra1"><b>PROYECTOS</b></h5>
        <p class="card-text palabra1 letra3">Tenemos el mejor Equipo de Trabajo que te ayudara paso a paso para que puedas inscribirte en cualquier programa de Beneficiarios que este más cerca a tu casa.<br><br><a href="?c=Landing&a=proyecto">Conoce más Aquí.</a></p>
      </div>
    </div>
  </div>
</div>