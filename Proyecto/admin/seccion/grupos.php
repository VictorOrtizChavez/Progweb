<?php include("../template/cabecera.php"); ?>
<?php  

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/db.php");
switch($accion){

    case "Agregar":

        //INSERT INTO `grupos` (`id`, `nombre`, `imagen`) VALUES (NULL, 'Grupo 1', 'imagen.jpg');
            $sentenciaSQL= $conexion ->prepare("INSERT INTO grupos (nombre, imagen) VALUES (:nombre,:imagen);");
            $sentenciaSQL->bindparam(':nombre',$txtNombre);
            $sentenciaSQL->bindparam(':imagen',$txtImagen);
            $sentenciaSQL->execute();
        
        //    echo "Presionado boton Agregar";
        break;
    
    case "Modificar":
        //    echo "Presionado boton Modificar";
        break;
    
    case "Cancelar":
        //    echo "Presionado boton Cancelar";
        break;

}

$sentenciaSQL= $conexion ->prepare("SELECT * FROM grupos");
$sentenciaSQL->execute();
$listaGrupos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);


?>


<div class="col-md-5">

<!--Formulario de agregar libros-->

<div class="card">
    <div class="card-header">
        Datos de Grupos
    </div>

    <div class="card-body">
      
    <form method="POST" enctype="multipart/form-data" >

<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombre">Nombre del grupo:</label>
<input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
</div>

<div class = "form-group">
<label for="txtImagen">Imagen:</label>
<input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen">
</div>


<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
</div>


</form>


    </div>


</div>
   




</div>



<div class="col-md-7">
<!--Tabla de datos del formulario-->

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

<?php
        foreach($listaGrupos as $grupo){
?>

        <tr>
            <td> <?php  echo $grupo['id']; ?> </td>
            <td> <?php  echo $grupo['nombre']; ?> </td>
            <td> <?php  echo $grupo['imagen']; ?> </td>
            <td>Seleccionar | Borrar</td>
        </tr>
        <?php } ?>
    </tbody>
</table>


    
</div>

<?php include("../template/pie.php"); ?>