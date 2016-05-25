<?php
include 'templates/header.php';
?>

<form method="post" action="../controlador/controladorInici.php">
    <div class="row small-up-2 large-up-2" id="comprarColeccion">
                   
                        <div class="column" >
				 <h5>Buzón de Sugerencias</h5>
                                 <p>
                                    Si quiere hacernos llegar alguna sugerencia o comentario para mejorar el funcionamiento de ClosetCloud, por favor, 
                                    rellene el siguiente formulario. Una vez recibidos los datos, se dará traslado a la persona responsable.
                                 </p><p> Se considerarán sugerencias aquellas propuestas, recomendaciones o iniciativas formuladas por la ciudadanía y destinadas a 
                                    mejorar los servicios públicos del ayuntamiento de Elche o de las entidades dependientes de él.
                                 </p>
                           
			</div>
			<div class="column">
                            <div class="small-10  columns">
                                Nombre: <input type="text" placeholder="pepito" name="nombreB">
                            </div>
                            <div class="small-10  columns">
                                Correo Electronico: <input type="email" placeholder="contraseña" name="emailB">
                            </div>
                            <div class="large-10 columns">
                                <label>Sugerencia:
                                  <textarea placeholder=""></textarea>
                                </label>
                            </div>
                            <div class="large-10 columns">
                                <input id="checkbox1" type="checkbox"><label for="checkbox1">Deseo recibit la Newsletter de ClosetCloud</label><br>
                                <input id="checkbox2" type="checkbox"><label for="checkbox2">He leido y acepto la politíca de protección de datos</label>
                            </div>

                            <!--<a href="#" class="button expanded secondary" style="background-color: black;color:white;">Comprar Colección</a>-->
                            <div class="small-10  columns">
                                <input type="submit" name="acceder">
                                
                            </div>
			</div>
                    
		</div>
    
</form>





<?php
include 'templates/footer.php';
?>