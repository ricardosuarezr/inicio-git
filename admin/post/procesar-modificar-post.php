<?php 
//coger los datos del form y los envia a la tabla usuarios
if(isset($_POST['id_post'],$_POST['titulo'],$_POST['contenido'],$_POST['temas'])){
$titulo = $_POST['titulo'];
$contenido =$_POST['contenido'];
$temas= $_POST['temas'];
$id= $_POST['id_post'];
//var_dump($_POST);

include '../../conexion.php';
//var_dump($conexion);


$consulta = "UPDATE `post` SET `titulo` = '$titulo', `contenido` = '$contenido', `temas` = '$temas' WHERE `post`.`id_post` = $id";

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