<?php include'templates/header.php'; ?>
<!--//////////////////////////////////////////////////FIN DEL HEADER///////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Slider con 4 imagenes principalmente-->
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

        <li class="orbit-slide is-active">
            <img src="imagenes/slider2.jpg">
        </li>
        <li class="orbit-slide">
            <img src="imagenes/slider8.jpg">
        </li>
        <li class="orbit-slide">
            <img src="imagenes/slider2.jpg">
        </li>
        <li class="orbit-slide">
            <img src="imagenes/slider8.jpg">
        </li>
    </ul>
</div>
<!--Los últimos videos subidos -->
<div class="row column text-center">

 
</div>
<div class="row small-up-2 large-up-3" id="servicios">
    <div class="column">
        <img class="thumbnail" src="imagenes/compras.png">
        <a href="buzonSugerencias.php" class="button expanded secondary">SIGUE TU COMPRA</a>
    </div>
    <div class="column">
        <img class="thumbnail" src="imagenes/buzon.png">
        <a href="#" class="button expanded secondary">SUGERENCIAS</a>
    </div>
    <div class="column">
        <img class="thumbnail" src="imagenes/ropa.png">
        <a href="#" class="button expanded secondary">¿ NECESITAS AYUDA ?</a>
    </div>

</div>


<!--Introducir las 6 imagenes subidas recientemente-->
<div class="row small-up-2 large-up-3" id="compart">

    <div class="column" id="compart2">
        <h5 id="estilo">COMPARTE TU ESTILO</h5>
        <p>#ClosetCloud</p>
        <a href="http://facebook.com" class="icon-button facebook">
            <i class="fi-social-facebook"></i><span></span>
        </a>
        <a href="http://facebook.com" class="icon-button instagram">
            <i class="fi-social-instagram"></i><span></span>
        </a>
        <br><br>
        <a href="#" class="button expanded secondary" style="background-color: white;color:black;">FOTOS</a>
    </div>

    <div class="column">
        <img class="" src="imagenes/imgCompart.jpg">

    </div>
    <div class="column">
        <img class="" src="imagenes/imgCompart2.jpg">

    </div>

</div>

<div class="row small-up-2 large-up-3" id="comprarColeccion">
    <div class="column">
        <img class="" src="imagenes/imgCompart.jpg">
    </div>
    <div class="column" id="compart2">
        <h5 id="estilo">NEGRO & BLANCO </h5>
        <a href="#" class="button expanded secondary">COMPRAR COLECCÍON</a>
    </div>
    <div class="column">
        <img class="" src="imagenes/imgCompart2.jpg">
    </div>

</div>

<!--4imagenes de nuevo en tienda-->

<div class="row column text-center">
    <h5 id="estilo">NUEVO EN TIENDA</h5>
</div>

<div class="row small-up-2 large-up-4">
    <div class="column">
        <img class="thumbnail" src="imagenes/camiseta4.jpg">
            <a href="#" class="button expanded">COMPRAR AHORA!</a>
            <span class="nombre-producto-link" title="CAMISETA CUELLO HALTER">CAMISETA CUELLO HALTER</span>
            <p id="precioTitulo">15,99€</p>
    </div>
    
    <div class="column">
        <img class="thumbnail" src="imagenes/camiseta3.jpg">
        <a href="#" class="button expanded">COMPRAR AHORA!</a>
        <span class="nombre-producto-link" title="VESTIDO TÚNICA LACE">VESTIDO TÚNICA LACE</span>
        <p id="precioTitulo">32,99€</p>
    </div>
    
    <div class="column">
        <img class="thumbnail" src="imagenes/vestido1.jpg">
        <a href="#" class="button expanded">COMPRAR AHORA!</a>
        <span class="nombre-producto-link" title="VESTIDO LARGO VOLANTES">VESTIDO LARGO VOLANTES</span>
        <p id="precioTitulo">39,99€</p>
    </div>
    
    <div class="column">
        <img class="thumbnail" src="imagenes/camiseta2.jpg">
        <a href="#" class="button expanded">COMPRAR AHORA!</a>
        <span class="nombre-producto-link" title="BODY ESCOTE ZIGZAG">BODY ESCOTE ZIGZAG</span>
        <p id="precioTitulo">20,99€</p>
    </div>
    
</div>

<!--/////////////////////////////////FOOTER//////////////////////////////////////////////////////////////////////////////-->
<?php include 'templates/footer.php'; ?>		