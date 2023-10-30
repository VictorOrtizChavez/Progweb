
<?php include("template/cabecera.php"); ?>


<?php include("template/menu.php"); ?>


        

        <div class="col-md-9">

        <div class="container">
    <form method ="POST">

<a>    
<?php
echo "Usuario: VictorOrtiz   " ;
echo "Contraseña: 18530046";

?>
</a>
<br/>
   
       
    <fieldset class="form-group row">
            <legend class="col-form-legend col-sm-9">Usuario</legend>
            <div class="col-sm-9">
                
            </div>



        <div class="form-group row">
            <label for="txtU" class="col-sm-9 col-form-label"></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="txtUsuario" id="txtUsuario" placeholder="Usuario">
            </div>
        </div>

<br></br>

    <fieldset class="form-group row">
            <legend class="col-form-legend col-sm-9">Contraseña</legend>
            <div class="col-sm-9">
                
            </div>


            <form method="POST" enctype="multipart/form-data" >

        <div class="form-group row">
            <label for="txtContrasenia" class="col-sm-9 col-form-label"></label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="txtContrasenia" id="txtContrasenia" placeholder="Contraseña">
            </div>
        </div>


<br></br>

        </fieldset>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">

<br></br>


                <button type="submit" name ="accion" value="Validar" class="btn btn-primary">Validar</button>
        


            </div>


            <div class="col-md-3">
                <br/>
<b>
<?php

$txtUsuario=(isset($_POST['txtUsuario']))?$_POST['txtUsuario']:"";
$txtContrasenia=(isset($_POST['txtContrasenia']))?$_POST['txtContrasenia']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$usuario="VictorOrtiz";
$contrasenia="18530046";



if($txtUsuario==$usuario){
echo "Usuario Correcto "."<br>";
}
else if($txtUsuario!=$usuario){
echo "Usuario Incorrecto  "."<br>";
}



if($txtContrasenia==$contrasenia){
echo "Contraseña Correcta  " ;
}
else if($txtContrasenia!=$contrasenia){
echo "Contraseña Incorrecta  ";
}

?>
</div> 
</b>

        </div>
    </form>
</div>

            
        </div>
        
    </div>
</div>






<?php include("template/pie.php"); ?>