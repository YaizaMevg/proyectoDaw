
<?php include 'templates/header.php';?>

<!-- //////////////////////////FIN DE HEADER/////////////////////////////////////////////////-->
<br>
<?php

    include '../modelo/clases/BaseDades.php';
    $url=$_SERVER['REQUEST_URI'];
    $rest =  substr($url, -1);
   // echo $rest;
    
    //$connexio = new BaseDades("localhost","root", "", "closetcloud");
    //$connexio->consultar("select imagenProducto from t_producto where idProducto='.$rest.'");
    
    $connexio = mysqli_connect("localhost","root", "", "closetcloud");
    $sentencia = "select imagenProducto from t_producto where idProducto='$rest'";
    $consulta = mysqli_query($connexio, $sentencia);
    
   
   
        while($row = mysqli_fetch_array($consulta))
        {
            

?>

    <div class="row small-up-2 large-up-2">
        <div class="column">
            <img src="<?php echo $row["imagenProducto"];?>">
        </div>
  
        <div class="column">
            
        </div>
   <?php }?>
    </div>
<br>
<!--////////////////////////FOOTER//////////////////////////////////////////////////////////// -->
<?php include 'templates/footer.php'; ?>