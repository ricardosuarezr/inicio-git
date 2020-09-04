
<?php 
include '../../header.php';
if(isset($_GET['id_usuario'])){
    $id= $_GET['id_usuario'];
    $consulta = "SELECT * from usuarios WHERE id_usuario = $id";
    include "../../conexion.php";
    if($datos=  mysqli_query($conexion,$consulta)){
        // recorremos la consulta
         // aquí usaremos los datos
       while($fila= mysqli_fetch_array($datos)){
include "template-form-modificar-usuario.php";
}
}
}



 include '../../footer.php';