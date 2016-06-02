<?php include 'templates/header.php'?>
<!--/////////////////////////////////////////////////777fin header///////////////////////////////////// -->
<form method="post" action="../controlador/controladorInici.php">
    <div class="row">
        <div class="large-6 columns">
            <label>Genero</label>
                            <input type="radio" name="sexoR" value="h" id="hombre"><label for="hombre">Hombre</label>
                            <input type="radio" name="sexoR" value="m" id="mujer"><label for="mujer">Mujer</label>
        </div>
    </div>
    <div class="row">
        
        <div class="large-6 columns">
            Nombre: <input type="text" placeholder="nombre" name="nombreR"/>
            Fecha Nacimiento: <input type="date" name="fechaNacimientoR"/>
            Dirección: <input type="text" placeholder="" name="direccionR"/>
            Ciudad: <input type="text" placeholder="nombre" name="ciudadR"/>
            Email: <input type="mail" placeholder="nombre" name="emailR"/><br>
            Contraseña: <input type="password" placeholder="nombre" name="passR"/>
            
        </div>
        <div class="large-6 columns">
            Apellido: <input type="text" placeholder="nombre" name="apellidoR"/>
            Telefono: <input type="text" placeholder="nombre" name="telefonoR"/>
            Provincia: <input type="text" placeholder="nombre" name="provinciaR"/>
            Codigo Postal: <input type="text" placeholder="nombre" name="codigoPR"/><br>
            Repite la contraseña: <input type="password" placeholder="nombre" name="passR2"/>
            
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
               