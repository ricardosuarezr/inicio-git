<?php 
//coger los datos del form y los envia a la tabla usuarios
if(isset($_POST['id_usuario'],$_POST['nombre'],$_POST['email'],$_POST['contraseña'])){
$nombre = $_POST['nombre'];
$email =$_POST['email'];
$contrasena= $_POST['contraseña'];
$id= $_POST['id_usuario'];
//var_dump($_POST);

include '../../conexion.php';
//var_dump($conexion);


$consulta = "UPDATE `usuarios` SET `nombre` = '$nombre', `email` = '$email', `contraseña` = '$contrasena' WHERE `usuarios`.`id_usuario` = $id";

    if(mysqli_query($conexion,$consulta)){
        mysqli_close($conexion);
       header('location:index.php?exito=modificacion');
        }else{
        echo 'no se ha grabado nada';
        header('location:index.php?error=modificacion');
        }

    }
    else {
        header ('location:../../header.php');
    }