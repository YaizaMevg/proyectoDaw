<?php include 'templates/header.php';?>
<!--///////////////////////////////////////FIN HEADER/////////////////////////////////////////////////////////////// -->
<br>      
        <div class="row small-up-2 medium-up-3 large-up-4">
            <?php 
            //include '../modelo/clases/BaseDades.php';
            $connexio = mysqli_connect("localhost","root", "", "closetcloud");
           // $connexio->consultar("select imagenProducto from t_producto where idCategoria=1");
          $sentencia = "select idProducto,nomProducto,imagenProducto from t_producto where idCategoria=1 and perfilProducto='mujer'";
          $consulta = mysqli_query($connexio, $sentencia);
            while($row = mysqli_fetch_array($consulta))
            {
            ?>
            <div class="column">
                <a href="a.php?id=<?php echo $row["idProducto"];?>" name="idPrueba"><img class="thumbnail" src="<?php echo $row["imagenProducto"];?>"></a>
               
           
                <h6><?php echo $row["nomProducto"];?></h6>
                
            </div>
      <?php }?>
           
            
            
            </div>
            <script src="js/jquery-2.1.4.min.js"></script>
            <script src="js/vendor/foundation.js"></script>
                    <script>
		      $(document).foundation();
		    </script>
       
    <!--////////////////////////////////FOOTER///////////////////////////////////////////////////////////////// -->
<?php include "templates/footer.php";?>
