<div class="card" style="width: 18rem;" >
  <img class="card-img-top" src="imagenes/<?php echo $fila['imagen_destacada']?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">   <?php echo $fila['titulo'];?>
</h5>
    <p class="card-text"><?php echo  substr ($fila['contenido'],0,100);?></p>
    <a href="mostrar-post.php?id_post=<?php echo $fila['id_post'];?>" class="btn btn-primary">Ver Todo</a>
  </div>
</div>