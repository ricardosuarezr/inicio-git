<?php
include '../header.php'  ;
?>
<div class="container">
    <form class="form-signin" method="POST" action="autenticacion.php">
  <h1 class="h3 mb-3 font-weight-normal">Por favor, inicia sesión</h1>
  <label for="Email" class="sr-only">Correo Electrónico</label>
  <input type="email" 
            id="email" 
            class="form-control mb-3"
            name="email" 
            placeholder="Dirección de correo Electrónico" 
            required autofocus>
  <label for="contraseña" class="sr-only">Contraseña</label>
  <input type="contraseña" 
        id="contraseña" 
        class="form-control mb-3" 
        name="contraseña" 
        placeholder="contraseña" 
        required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" name="recuerdame" value="recuerdame"> Recuérdame
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
  <hr>
</form>
</div>



<?php

include '../footer.php';
?>