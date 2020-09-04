<?php 
//coger los datos del form y los envia a la tabla usuarios
if(isset($_POST['nombre'],$_POST['email'],$_POST['contraseña'])){
$nombre = $_POST['nombre'];
$email =$_POST['email'];
$contrasena= $_POST['contraseña'];
//var_dump($_POST);

include '../../conexion.php';
//var_dump($conexion);


$consulta = "INSERT INTO usuarios (id_usuario,nombre,email,contraseña)VALUES('0','$nombre','$email','$contrasena')";

    if(mysqli_query($conexion,$consulta)){
        mysqli_close($conexion);
       header('location:index.php');
        }else{
        echo 'no se ha grabado nada';
        }

    }