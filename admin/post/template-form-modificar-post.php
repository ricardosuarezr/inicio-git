<h2>Modificar Post</h2>
<form method="post" action="procesar-modificar-post.php">
<div class='form-group'>
<label for="id_post">ID</label>
<input readonly value="<?php echo $fila['id_post'] ?>" class="form-control"  type="text" name="id_post" id="id_post" >
</div>
<div class='form-group'>
<label for="titulo">Titulo</label>
<input value='<?php echo $fila['titulo'] ?>' class="form-control"  type="text" name="titulo" id="titulo">
</div>
<div class="form-group">
<label for="contenido">Contenido</label>
<textarea class="form-control"  name="contenido" id="contenido" cols="30" rows="10">
<?php echo $fila['contenido'] ?>
</textarea>
</div>
<div class="form-group">
<label for="temas">Temas</label>
<input  value='<?php echo $fila['temas'] ?>' class="form-control"  type="text" name="temas" id="temas">
</div>
<button  class= 'btn btn-primary 'type="submit">Modificar Post</button>
