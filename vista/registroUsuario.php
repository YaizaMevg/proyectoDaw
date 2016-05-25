<?php include 'templates/header.php'?>
<!--/////////////////////////////////////////////////777fin header///////////////////////////////////// -->
                <form method="post" action="../controlador/controladorInici.php">
                   
                    <div class="row small-up-2 large-up-2"
                        <div class="row">
                          <div class="large-6 columns">
                            <label>Genero</label>
                            <input type="radio" name="sexo" value="Red" id="hombre"><label for="hombre">Hombre</label>
                            <input type="radio" name="sexo" value="Blue" id="mujer"><label for="mujer">Mujer</label>
                          </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                              
                                Nombre: <input type="text" placeholder="nombre" name="nombreR"/>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                              
                                Apellido: <input type="text" placeholder="nombre" name="apellidoR"/>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                              
                                Fecha Nacimiento: <input type="date" name="fechaNacimiento"/>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                              
                                Email: <input type="mail" placeholder="nombre" name="emailR"/>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                              
                                Contraseña: <input type="password" placeholder="nombre" name="pass"/>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-4 columns">
                              
                                Confirma tu contraseña: <input type="password" name="pass2"/>
                             
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-9 columns">
                                
                                <input id="checkbox1" type="checkbox"><label for="checkbox1">HE LEÍDO Y ACEPTO LAS CONDICIONES DE COMPRA Y LA POLÍTICA DE PRIVACIDAD</label>
                                
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" name="enviar">
                            <ul class="button-group">
                                <!--<button class="small button" name="enviar" type="submit">Enviar</button>-->
                                
                                <button class="small button [success secondary alert]" name="reset" type="reset">Limpiar</button>
                            </ul>
                        </div>
                         
                         
                         
                   
                </form>
<!-- /////////////////////////////FOOTER//////////////////////////////////////////////////////-->
<?php include 'templates/footer.php';?>
               