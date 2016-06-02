<?php
    include 'templates/header.php';
?>

<div class="expanded">
    <img src="imagenes/local.jpg">
</div>
<form method="post" action="../controlador/controladorInici.php">
                <div class="row small-up-2 large-up-2" id="comprarColeccion">
                   
                        <div class="column" >
				 <h5>Tengo una Cuenta</h5>
                            <div class="small-10  columns">
                                Email: <input type="email" placeholder="pepito@hotmail.com" name="emailUser">
                            </div>
                            <div class="small-10  columns">
                                Contraseña: <input type="password" placeholder="contraseña" name="passUser">
                            </div>

                            <!--<a href="#" class="button expanded secondary" style="background-color: black;color:white;">Comprar Colección</a>-->
                            <div class="small-10  columns">
                                <input type="submit" name="acceder">
                                
                            </div>
			</div>
			<div class="column">
                           <h5>Nuevos Clientes</h5>
                           <a href="registroUsuario.php" class="button expanded secondary" style="background-color: black;color:white;">Crear Cuenta</a>
			</div>
                    
		</div>
            </form>   

<?php
    include 'templates/footer.php';
?>