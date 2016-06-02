<?php
include '../templates/headerAdmin.php';
include '../../modelo/clases/BaseDades.php';
$url=$_SERVER['REQUEST_URI'];
$rest = $_GET['id'];
$connexio = mysqli_connect("localhost","root", "", "closetcloud");
$sentencia = "select * from t_producto where idProducto='$rest'";
$consulta = mysqli_query($connexio, $sentencia);

?>
<br>
<form action="../../controlador/controladorInici.php" method="post">
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
<?php while($row = mysqli_fetch_array($consulta))
        {?>
            <tr>
                <td><input type="text" name="nomModPro" value="<?php echo $row["nomProducto"];?>"></td>
                <td><input type="text" name="precioModPro" value="<?php echo $row["precioProducto"];?>"></td>
                <td><input type="text" name="imgModPro" value="<?php echo $row["imagenProducto"];?>"></td>
                <td><input type="text" name="stockModPro" value="<?php echo $row["stockProducto"];?>"></td>
                <td><input type="text" name="descripModPro" value="<?php echo $row["descripcionProducto"];?>"></td>
                <td><input type="text" name="categModPro" value="<?php echo $row["idCategoria"];?>"></td>
                <td><input type="text" name="tallaModPro" value="<?php echo $row["idTalla"];?>"></td>
                <td><input type="text" name="perfilModPro" value="<?php echo $row["perfilProducto"];?>"></td>
                <td><input type="hidden" name="idPro" value="<?php echo $row["idProducto"];?>"></td>
                <td><input type="submit" name="modificarProducto" value="Modificar"></td>
            </tr>
<?php } ?>
            
</form>