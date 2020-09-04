<?php 
include '../../header.php';
if(isset($_GET['exito'])&& $_GET['exito']==='modificacion') {echo '<div class="alert alert-success" role="alert">
Has modificado el usuario con éxito
</div>';}
echo "<a class='btn btn-success mb-2 mt-2' href='form-agregar-usuario.php'>Agregar Usuario</a>";
// mostrar lista de usuarios
include '../../conexion.php';
if(!$conexion):
    echo 'no se ha podido establecer la conexion';
else:
    // preparado la consulta
   $consulta = "SELECT * FROM usuarios";
   // ejecutamos la consulta
   $datos = mysqli_query($conexion,$consulta);
   if($datos){
       echo '<table class="table">
       <th>id</th>
       <th>nombre</th>
       <th>email</th>
       <th>Contraseña</th> 
       <th>Modificar</th> 
       <th>Borrar</th> 

       ';
       while($fila = mysqli_fetch_array($datos)){
           // MUESTRA LAS FILAS
          include 'template-tabla-usuarios.php';
       }// aqui termina el loop
       echo '</table>';
   }else{
       echo 'ha fallado la consulta';
   }
endif;
include '../../footer.php';



// include '../../header.php';
// // //realizamos la conexión
// // $conexion=mysqli_connect('localhost','root','','blog');
// // mysqli_set_charset($conexion,"utf8");
// //verificamos la conexión
// if(!$conexion){
//     //si falla la conexión
//     echo 'no has podido conectarte, revisa los datos de acceso';
// }else{
//     //si la conexion no falla
//     // echo 'tienes una conexión excelente';
//     echo '<hr>';

//     //preparamos la consulta
//     $consulta=" SELECT * FROM usuarios";
//     if (
//         $datos=mysqli_query($conexion,$consulta)){
//             //recorremos las consulta
//             //aqui usaremos los datos
//             //boton añadir post
//             echo "<a class='btn btn-success' href='form-agregar-post.php'>Nuevo Post</a>";
//             //empieza la tabla
//         echo "<table class='table'>
//         <thead>
//           <tr>
//             <th scope='col'>ID</th>
//             <th scope='col'>Nombre</th>
//             <th scope='col'>Email</th>
//             <th scope='col'>Password</th>
//             <th scope='col'>Modificar</th>
//             <th scope='col'>Borrar</th>

//           </tr>
//         </thead>
//         <tbody>";
//         while($fila=mysqli_fetch_array($datos))
//         {
//             include 'template-tabla-usuarios.php';
           

//         };
//         }else{
//             echo 'no se ha podido realizar la consulta';
//         }
//         echo "
//         </tbody>
//       </table>";
    

// }
// include '../../footer.php';

//
?>