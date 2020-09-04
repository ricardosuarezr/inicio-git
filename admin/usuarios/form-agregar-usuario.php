<?php include '../../header.php'; ?>
<h2 class="text-center">Registro de Usuarios</h2>
<form method='post' action="procesar-agregar-usuario.php">
<div class='form-group'>
<label for="nombre">Nombre</label>
<input class="form-control"  type="text" name="nombre" id="nombre">
</div>
<div class="form-group">
<label for="email">Email</label>
<input class="form-control"  type="email" name="email" id="email">

</input>
</div>
<div class="form-group">
<label for="contraseña">Contraseña</label>
<input class="form-control"  type="text" name="contraseña" id="contraseña">
</div>
<button  class= 'btn btn-primary mb-2 'type="submit">Añadir Usuario</button>



</form>
<?php include '../../footer.php'; ?>