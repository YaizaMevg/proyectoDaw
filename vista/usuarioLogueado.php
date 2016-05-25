<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>ClosetCloud</title>
	<link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css"/>
        <link rel="stylesheet" href="css/css.css">
        <link rel="stylesheet" href="css/cssIconosSociales.css">
       
        
        <link rel="stylesheet" href="css/footer.css">
</head>
	<body >
	 <!-- Menú superior -->
                <div class="top-bar">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="menu-text">Logo ClosetCloud</li>
					
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
                                    <ul class="menu">
                                        <!--<li><input type="search" placeholder="Search"></li>-->
                                        
                                        <li><span class="prefix"><i class="fi-shopping-cart" id="carrito"></i></span></li>
                                        <br>
                                        <li>Hola <?php echo $nomUsuari;?></li>
                                        
				</ul>
			</div>
		</div>
		<div class="top-bar">
			<div class="top-bar-left">
				<ul class="dropdown menu" data-dropdown-menu>
					
					<li class="has-submenu">
                                            <a href="#">Hombre</a>
                                                <ul class="submenu menu vertical" data-submenu>
                                                    <li><a href="#">Camiseta</a></li>
                                                    <li><a href="#">Pantalon</a></li>
                                                    <li><a href="#">Sudaderas</a></li>
                                                </ul>
                                        
                                        </li>
					<li class="has-submenu">
                                            <a href="#">Mujer</a>
                                                <ul class="submenu menu vertical" data-submenu>
                                                    <li><a href="#">Camiseta</a></li>
                                                    <li><a href="#">Pantalon</a></li>
                                                    <li><a href="#">Sudaderas</a></li>
                                                </ul>
                                        
                                        </li>
                                        <li class="has-submenu">
                                            <a href="#">Kids</a>
                                                <ul class="submenu menu vertical" data-submenu>
                                                    <li><a href="#">Camiseta</a></li>
                                                    <li><a href="#">Pantalon</a></li>
                                                    <li><a href="#">Sudaderas</a></li>
                                                </ul>
                                        
                                        </li>
                                        <li><a href="#">Contacto</a></li>
				</ul>
			</div>
			<div class="top-bar-right">
				<ul class="menu">
                                    <ul class="menu">
                                        <li><input type="search" placeholder="Search"></li>
					
				</ul>
			</div>
		</div>
        
    </body>
    <?php include 'templates/footer.php' ?>
    
</html>