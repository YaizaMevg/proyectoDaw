<?php
include '../templates/headerAdmin.php';

$connexio = mysqli_connect("localhost","root", "", "closetcloud");
$sentencia = "select * from t_producto";
$consulta = mysqli_query($connexio, $sentencia);
        
    

?>
<form action="../../controlador/controladorInici.php" method="post">
<br>
<div class="row">
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Stock</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th>Talla</th>
                <th>Perfil</th>
                 <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_array($consulta))
            { ?>
            <tr>
                <td><?php echo $row["nomProducto"];?></td>
                <td><?php echo $row["precioProducto"];?></td>
                <td><?php echo $row["imagenProducto"];?></td>
                <td><?php echo $row["stockProducto"];?></td>
                <td><?php echo $row["descripcionProducto"];?></td>
                <td><?php echo $row["idCategoria"];?></td>
                <td><?php echo $row["idTalla"];?></td>
                <td><?php echo $row["perfilProducto"];?></td>
        <input type="hidden" name="idProduc" value="<?php echo $row["idProducto"];?>">
        
        <td><input type="submit" name="eliminarPro" value="Eliminar"></td>
         <?php   }?>
      
           <!--     <td><a href="modificarProEsco.php?id=<?php //echo $row["idProducto"];?>">modificar</a></td>-->
                
            </tr>
           
        </tbody>
        
    </table>
</form>
</div>