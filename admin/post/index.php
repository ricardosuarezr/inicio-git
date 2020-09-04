<?php 
include '../../header.php';
if(isset($_GET['exito'])&& $_GET['exito']==='modificacion') {echo '<div class="alert alert-success" role="alert">
  Has modificado el post con éxito
  </div>';}
include '../../conexion.php';
// //realizamos la conexión
// $conexion=mysqli_connect('localhost','root','','blog');
// mysqli_set_charset($conexion,"utf8");
//verificamos la conexión
if(!$conexion){
    //si falla la conexión
    echo 'no has podido conectarte, revisa los datos de acceso';
}else{
    //si la conexion no falla
    // echo 'tienes una conexión excelente';
    echo '<hr>';

    //preparamos la consulta
    $consulta=" SELECT * FROM post";
    if (
        $datos=mysqli_query($conexion,$consulta)){
            //recorremos las consulta
            //aqui usaremos los datos
            //boton añadir post
            echo "<a class='btn btn-success' href='form-agregar-post.php'>Nuevo Post</a>";
            //empieza la tabla
        echo "<table class='table'>
        <thead>
          <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Título</th>
            <th scope='col'>Publicación</th>
            <th scope='col'>Modificar</th>
            <th scope='col'>Borrar</th>

          </tr>
        </thead>
        <tbody>";
        while($fila=mysqli_fetch_array($datos))
        {
            include 'template-tabla-admin.php';
           

        };
        }else{
            echo 'no se ha podido realizar la consulta';
        }
        echo "
        </tbody>
      </table>";
    

}
include '../../footer.php';

?>