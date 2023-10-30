<?php include("template/cabecera.php"); ?>

<?php include("template/menu.php"); ?>




        <div class="col-md-6">

        <?php  $url="http://".$_SERVER['HTTP_HOST']."/proyecto" ?>
        
        <div class="jumbotron">
        <h1 class="display-3">Bienvenido</h1>
        <p class="lead">Esta es mi pagina web</p>
        <hr class="my-2">
        <p>Practica 1</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="<?php echo $url; ?>/admin/" role="button">Admin</a>
        </p>
      
        </div>  


           </div>
       
      
         <div class="col-md-3">

          Espacio reservado
                
         </div>




              
           
     

        
<?php include("template/pie.php"); ?>



   