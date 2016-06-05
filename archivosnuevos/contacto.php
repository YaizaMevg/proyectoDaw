<?php
    include 'templates/header.php';
?>


<form method="post" action="../controlador/controladorInici.php">
                <div class="row small-up-2 large-up-2" id="comprarColeccion">
                   
                        <div class="column" >
				 <h5>Metro</h5>
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                     eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis 
                                     parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellent
                                     esque eu, pretium quis, sem. Nulla consequat massa quis enim</p>
                                 <h5>ClosetCloud</h5>
                                 <p>Av Santa Rosa,24</p>
                                 <p>08923 - Santa Coloma de Gramenet</p>
                                 <p>93 780 75 17</p>
			</div>
			<div class="column">
                           <h5>¿Quieres ponerte en contacto con nosotros?</h5>
                           <form action="../controlador/controladorInici.php" method="post">
                                <div class="small-10  columns">
                                Nombre: <input type="text" placeholder="Escribe tu nombre" name="nombreB">
                                </div>
                                <div class="small-10  columns">
                                    Correo Electronico: <input type="email" placeholder="ejemplo@ejemplo.com" name="emailB">
                                </div>
                                <div class="large-10 columns">
                                    <label>Consulta:
                                      <textarea placeholder=""></textarea>
                                    </label>
                                </div>
                                 <div class="large-10 columns">
                                <input id="checkbox1" type="checkbox"><label for="checkbox1">Deseo recibit la Newsletter de ClosetCloud</label><br>
                                <input id="checkbox2" type="checkbox"><label for="checkbox2">He leido y acepto la politíca de protección de datos</label>
                            </div>

                            <!--<a href="#" class="button expanded secondary" style="background-color: black;color:white;">Comprar Colección</a>-->
                            <div class="small-10  columns">
                                <input type="submit" name="contacto">
                                
                            </div>
                           </form>
                        </div>
                    
		</div>
            </form>   

<?php
    include 'templates/footer.php';
?>