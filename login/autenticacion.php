<?php  
session_start();
//coger las variables de login
if(isset($_POST['email'],$_POST['contraseña'])){
    $email=$_POST['email'];
    $contrasena=$_POST['contraseña'];
    include '../conexion.php';
    $consulta="SELECT * FROM usuarios";
    if($datos=mysqli_query($conexion,$consulta)){
        //coincidencia es true si la consulta coincide
        $coincidencia=false;
        while($fila=mysqli_fetch_array($datos)){
            //comparamos fila a fila email y contraseña
            if($fila['email']==$email && $fila['contraseña']==$contrasena){
                echo 'Estas autenticado';
                $_SESSION['autenticacion']='SI';
                $coincidencia=true;
            }
           
        }
        $coincidencia?header('location:../admin'):header('location:../');

    }else{
        echo 'la consulta no ha podido realizarse';
    }
}else{
    header ('location:../index.php');
}


//compararlas con la base de datos

//si alguna coincide le damos $_SESSION['autenticacion']

//sin ninguna coincide ya veremos
?>