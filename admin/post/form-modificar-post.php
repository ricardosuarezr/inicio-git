
<?php 
include '../../header.php';
if(isset($_GET['id_post'])){
    $id= $_GET['id_post'];
    $consulta = "SELECT * from post WHERE id_post = $id";
    include "../../conexion.php";
    if($datos=  mysqli_query($conexion,$consulta)){
        // recorremos la consulta
         // aquí usaremos los datos
       while($fila= mysqli_fetch_array($datos)){
include "template-form-modificar-post.php";
}
}
}



 include '../../footer.php';