<?php include'templates/header.php';?>
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
						<img src="imagenes/slider3.jpg">
					</li>
					<li class="orbit-slide">
						<img src="imagenes/slider2.jpg">
					</li>
					<li class="orbit-slide">
						<img src="imagenes/slider3.jpg">
					</li>
			</ul>
		</div>
		<!--Los últimos videos subidos -->
		<div class="row column text-center">
			
			<hr>
		</div>
		<div class="row small-up-2 large-up-3">
			<div class="column">
				<img class="thumbnail" src="imagenes/buzon.png">
					<h5>Buzón de Sugerencias</h5>
					
                                        <a href="buzonSugerencias.php" class="button expanded secondary">Ver</a>
			</div>
			<div class="column">
				<img class="thumbnail" src="imagenes/compras.png">
					<h5>Sigue tu compra</h5>
					
				<a href="#" class="button expanded">Ver</a>
			</div>
			<div class="column">
				<img class="thumbnail" src="imagenes/ropa.png">
					<h5>¿Necesitas ayuda?</h5>
					
				<a href="#" class="button expanded">Ver</a>
			</div>
			
		</div>
		<hr>
			
		
		<!--Introducir las 6 imagenes subidas recientemente-->
		<div class="row small-up-2 large-up-3" id="compart">
                   
			<div class="column" id="compart2">
				
					<h5>COMPARTE TU ESTILO</h5>
                                        <p>#ClosetCloud</p>
					<a href="http://facebook.com" class="icon-button facebook">
                                            <i class="fi-social-facebook"></i><span></span>
                                        </a>
                                        <a href="http://facebook.com" class="icon-button instagram">
                                            <i class="fi-social-instagram"></i><span></span>
                                        </a>
                                        <br><br>
                                        <a href="#" class="button expanded secondary" style="background-color: white;color:black;">Fotos</a>
			</div>
                    
			<div class="column">
                            <img class="" src="imagenes/imgCompart.jpg">
		
			</div>
			<div class="column">
                            <img class="" src="imagenes/imgCompart2.jpg">
			
			</div>
                    
		</div>
                <hr>
                <div class="row small-up-2 large-up-3" id="comprarColeccion">
                   
			
                    
			<div class="column">
                            <img class="" src="imagenes/imgCompart.jpg">
		
				
			</div>
                         <div class="column" id="compart2">
				
                            <h5>NEGRO & BLANCO </h5>
                            

                            <a href="#" class="button expanded secondary" style="background-color: white;color:black;">Comprar Colección</a>
			</div>
			<div class="column">
                            <img class="" src="imagenes/imgCompart2.jpg">
			
			</div>
                    
		</div>
		
                <!--4imagenes de nuevo en tienda-->
                <hr>
                <div class="row column text-center">
			<h2>Nuevo en tienda</h2>
			
		</div>
		<div class="row small-up-2 large-up-4">
			<div class="column">
				<img class="thumbnail" src="imagenes/camiseta4.jpg">
                                    <a href="#" class="button expanded">Comprar ahora</a>
                                    <h5>CAMISETA CUELLO HALTER</h5>
                                     <p id="precioTitulo">15,99€</p>
			</div>
			<div class="column">
				<img class="thumbnail" src="imagenes/camiseta3.jpg">
                                    <a href="#" class="button expanded">Comprar ahora</a>
                                    <h5>VESTIDO TÚNICA LACE</h5>
                                     <p id="precioTitulo">32,99€</p>
			</div>
			<div class="column">
				<img class="thumbnail" src="imagenes/vestido1.jpg">
                                    <a href="#" class="button expanded">Comprar ahora</a>
                                    <h5>VESTIDO LARGO VOLANTES</h5>
                                     <p id="precioTitulo">39,99€</p>
			</div>
			<div class="column">
				<img class="thumbnail" src="imagenes/camiseta2.jpg">
                                    <a href="#" class="button expanded">Comprar ahora</a>
                                    <h5 style="font-size: 15px; font:bold 90%;">BODY ESCOTE ZIGZAG</h5>
                                        <p id="precioTitulo">20,99€</p>
			</div>
		</div>

<!--/////////////////////////////////FOOTER//////////////////////////////////////////////////////////////////////////////-->
<?php include 'templates/footer.php';?>		