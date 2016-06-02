<?php
include '../templates/headerAdmin.php';

$connexio = mysqli_connect("localhost","root", "", "closetcloud");
$sentencia = "select * from t_producto";
$consulta = mysqli_query($connexio, $sentencia);
        
    

?>
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
                <td><a href="modificarProEsco.php?id=<?php echo $row["idProducto"];?>">modificar</a></td>
                
            </tr>
            <?php   }?>
        </tbody>
        
    </table>
</div>




                <script src="../js/jquery-2.1.4.min.js"></script>
		<script src="../js/vendor/foundation.js"></script>
                    <script>
		      $(document).foundation();
		    </script>
	</body>
</html>