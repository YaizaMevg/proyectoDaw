<?php include 'templates/header.php';?>

<!-- //////////////////////////FIN DE HEADER/////////////////////////////////////////////////-->
<br>
<?php
    
   // include '../modelo/conexion.php';
    //include '../modelo/clases/BaseDades.php';
    //$url=$_SERVER['REQUEST_URI'];
    //$rest =  substr($url, -1);
   // echo $rest;
    
    //$connexio = new BaseDades("localhost","root", "", "closetcloud");
    //$connexio->consultar("select imagenProducto from t_producto where idProducto='.$rest.'");
    
    $connexio = mysqli_connect("localhost","root", "", "closetcloud");
    $sentencia = ("select * from t_producto where idProducto=" . $_GET['id']);
    $sentencia2 =("select nomProducto, size from t_producto inner join t_talla on t_producto.idProducto=t_talla.idTalla where idProducto=".$_GET['id']);
                 //select nomProducto, size from t_producto inner join t_talla on t_producto.idProducto=t_talla.idTalla where idProducto=1;
    $re = mysqli_query($connexio, $sentencia);
        while($row = mysqli_fetch_array($re))
        {          
?>
      
 <div class="row">
      <div class="medium-6 columns">
        <img class="thumbnail" src="<?php echo $row["imagenProducto"]; ?>">
        
      </div>
      <div class="medium-6 large-5 columns">
        <h3><?php echo $row ["nomProducto"]; ?></h3>
        <p><?php echo $row ["descripcionProducto"]; ?></p>
        <p><?php echo $row ["precioProducto"]; ?></p>
        <?php 
         $re2 = mysqli_query($connexio, $sentencia2);
        while($row3 = mysqli_fetch_array($re2))
        {
        ?>
        <label>Talla
        <select>
          <option value="1"><?php echo $row3 ["size"]; ?></option>
          <option value="starbuck">Medium</option>
          <option value="hotdog">Large</option>
          <option value="apollo">Yeti</option>
        </select>
        </label>
        <?php }?>
        <div class="row">
          <div class="small-3 columns">
            <label for="middle-label" class="middle">Cantidad</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="middle-label" placeholder="One fish two fish">
          </div>
        </div>

        <a href="./carritodecompras.php?id=<?php echo $row['idProducto'];?>" class="button expanded">AÑADIR A LA BOLSA</a>

        <div class="small secondary expanded button-group">
            <a class="button">Facebook</a>
            <a class="button">Twitter</a>
            <a class="button">Yo</a>
          </div>
        </div>
    </div>
<?php }?>
<br>

<!--////////////////////////FOOTER//////////////////////////////////////////////////////////// -->
<?php include 'templates/footer.php'; ?>