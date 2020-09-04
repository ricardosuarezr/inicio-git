<?php 
if(isset($_GET['id_usuario'])){
$id=$_GET['id_usuario'];
$consulta="DELETE FROM usuarios WHERE id_usuario=$id";
include '../../conexion.php';
if(mysqli_query($conexion,$consulta)){
    header ('location:index.php');
}else{
    echo 'hoy no es tu día';
}
}else{
    echo 'estas intentando borrar algo que no existe';
}

?>