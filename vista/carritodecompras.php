<?php

session_start();
include '../modelo/conexion.php';
include 'templates/header.php';

if (isset($_SESSION['carrito'])) {  
    if (isset($_GET['id'])) {
        $arreglo = $_SESSION['carrito'];
        $encontro = false;
        $numero = 0;
        for ($i = 0; $i < count($arreglo); $i++) {
            if ($arreglo[$i]['Id'] == $_GET['id']) {
                $encontro = true;
                $numero = $i;
            }
        }
        if ($encontro == true) {
            $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
            $_SESSION['carrito'] = $arreglo;
        } else {
            $nombre = "";
            $precio = 0;
            $imagen = "";
            $re = mysql_query("select * from t_producto where idProducto=" . $_GET['id']);
            while ($f = mysql_fetch_array($re)) {
                $nombre = $f['nomProducto'];
                $precio = $f['precioProducto'];
                $imagen = $f['imagenProducto'];
            }
            $datosNuevos = array('Id' => $_GET['id'],
                'Nombre' => $nombre,
                'Precio' => $precio,
                'Imagen' => $imagen,
                'Cantidad' => 1);

            array_push($arreglo, $datosNuevos);
            $_SESSION['carrito'] = $arreglo;
        }
    }
} else {
    if (isset($_GET['id'])) {
        $nombre = "";
        $precio = 0;
        $imagen = "";
        $re = mysql_query("select * from t_producto where idProducto=" . $_GET['id']);
        while ($f = mysql_fetch_array($re)) {
            $nombre = $f['nomProducto'];
            $precio = $f['precioProducto'];
            $imagen = $f['imagenProducto'];
        }
        $arreglo[] = array('Id' => $_GET['id'],
            'Nombre' => $nombre,
            'Precio' => $precio,
            'Imagen' => $imagen,
            'Cantidad' => 1);
        $_SESSION['carrito'] = $arreglo;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Carrito de compras</title>
        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css"/>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/cssIconosSociales.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="icon" type="image/png" href="imagenes/favicon.ico" />
    </head>
    <body>
        <header>
            <h1>Mi Bolsa</h1>
        </header>
        <section>
<?php
$total = 0;
if (isset($_SESSION['carrito'])) {
    $datos = $_SESSION['carrito'];

    $total = 0;
    for ($i = 0; $i < count($datos); $i++) {
    ?>
        <div class="producto">
            <center>
                <img src="<?php echo $datos[$i]['Imagen']; ?>"><br>
                <span><?php echo $datos[$i]['Nombre']; ?></span><br>
                <span>Precio: <?php echo $datos[$i]['Precio']; ?></span><br>
                <span>Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad']; ?>"></span><br>
                <span>Subtotal:<?php echo $datos[$i]['Cantidad'] * $datos[$i]['Precio']; ?></span><br>

            </center>
        </div>
            <?php
                    $total = ($datos[$i]['Cantidad'] * $datos[$i]['Precio']) + $total;
                }
            } else {
                echo '<center><h2>No has añadido ningun producto</h2></center>';
            }
            echo '<center><h2>Total: ' . $total . '</h2></center>';
            
            
            ?>
            <center><a href="camiHombre.php">Ver catalogo</a></center>
      
        </section>
    </body>
</html>