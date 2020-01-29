<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Chukwudi</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css"/>
	<link rel="stylesheet" href="assets/css/boot.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: white;margin:0">			    
	    <a class="navbar-brand" href="#" style="margin-left: 25px" ><b>Chukwudi</b></a>
	    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="navbar-collapse collapse col-md-7 row" id="navbarColor01" style="margin-left: 7%;">
	      <form class="busqueda col-12">
	      	<img src="assets/icons/126474.svg" alt="Lupa">
	        <input class="form-" type="search" placeholder="Search" aria-label="Search">	        
	      </form>	      
	    </div>
	    <div class="pedidos">
	    	<img src="assets/icons/747376.svg" alt="Usuario" width="20px">
	    	<a onclick="abrir()">3</a>
	    </div>
	</nav>

	<div id="menudos" class="menudos">
		<a href="javascript:void(0)" class="closebtn" onclick="cerrar()">&times;</a>
		<br>
		<h2>My Order <img src="assets/icons/emoji.png" alt="Emoji" width="20px"></h2>

	  	<div class="edicion row col-12">
	  	 	<span class="col-8">625 St Marks Ave</span>
	  	 	<p class="col-4">Edit</p>
	  	 	<span class="col-5"> <div class="img"><img src="assets/icons/149316.svg" alt="Reloj" width="15px"></div> 35 min</span>
	  	 	<p class="col-7"> Choose time</p>
	  	</div>	
	  	<ul class="col-12 list-pedidos">
	  	 	<li><img src="assets/images/pexels-photo-1099680.jpeg" > <b>1 x Postre</b> <span>$6.99</span></li>
	  	 	<li><img src="assets/images/pexels-photo-1099680.jpeg" > <b>1 x Filete</b> <span>$14.99</span></li>
	  	 	<li><img src="assets/images/pexels-photo-1099680.jpeg" > <b>1 x Burrito</b> <span>$13.99</span></li>
	  	 	<li><img src="assets/images/pexels-photo-1099680.jpeg" > <b>1 x Salmon</b> <span>$15.99</span></li>
	  	 	<li><img src="assets/images/pexels-photo-1099680.jpeg" > <b>1 x Hamburguesa</b> <span>$14.99</span></li>	  	 	
	  	</ul> 
	  	<div class="col-12 row total" style="margin-right: 0; margin-left: 0">
	  		<div class="row col-12" style="align-items: center;">
		  		<h3 class="col-4" style="padding: 0">Total</h3>
		  		<h2 class="col-8" style="padding: 0;text-align: right;font-weight: 700">$66.95</h2>	
	  		</div>
	  		<hr class="col-12" style="padding: 0">
	  		<div class="col-12 row" style="margin:0;padding: 0">
	  			<div class="col-4" style="padding: 0">
	  				<p>Persons</p>
	  				<div class="input-sum">
	  					<a style="padding: 0">-</a>
					    <input name="quantity" id="quantity" size="2" value="1" style="text-align: center;>" />
					    <a style="padding: 0" >+</a>
	  				</div>
	  			</div>
	  			<div class="col-8" style="position: relative;">
	  				<div class="checkout">
	  					Checkout ->
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	</div>
	<!-- 66.95 -->
	 
  

	<div class="bod container" style="margin-top: 5%;">
		<div class="row">
			<!-- publicidad -->
			<div class="col-12 col-md-11 row publicidad mx-auto">
				<div class="col-md-4 text-center">
					<img src="assets/images/headerimage.png" alt="Persona" width="100%" style="margin-top: -30px">
				</div>
				<div class="col-md-8">
					<h2>$0 delivery for 30 days! <img src="assets/images/d.png" alt="Cono" id="cono"></h2> 
					<h6>$0 delivery fee for orders over $10 for 30 days</h6>
				</div>
				<a href="#"><p style="font-weight: 600">Learn more <img src="assets/icons/109617.svg" alt="Flecha" width="15px"></p></a>
			</div>

			<!-- restaurantes -->
			<div class="col-12 col-md-11 row mx-auto" style="padding: 0; margin-top: 5%">
				<div class="col-12 col-md-6">
					<h1>Restaurants <img src="assets/icons/1046784.svg" alt="Hamburgesa" width="25px"></h1>
				</div>
				<div class="col-12 col-md-6 filtro">
					<div class="select">
						<img src="assets/icons/149316.svg" alt="Reloj" width="15px">
						Delivery: <b>Now <img src="assets/icons/118740.svg" alt="Down" width="10px" class="down"></b>
					</div>
				</div>
				<div class="col-12 categorias">
				  	<?php
						$categorias = file_get_contents("assets/json/categories.json");
						$datos = json_decode($categorias, true);
						 
						foreach ($datos as $dato) {
							echo '<div><div class="lista"><div class="img">';
						    echo '<img src="assets/icons/';echo $dato['icon']; echo'" width="35px"></div><h6>';
						    echo $dato['name'];
						    echo '</h6></div></div>';
						}
					?>
				</div>
				<div class="col-12 row" style="margin: 0">
					<?php
						$productos = file_get_contents("assets/json/products.json");
						$cantidad = json_decode($productos, true);
						 
						foreach ($cantidad as $prod) {
							echo '<div class="col-12 col-md-6 col-lg-4 producto-list">';
						    echo '<div class="imagen"><img src="';echo $prod['image'];echo'" width="100%">';
						    echo '<span class="time">';echo $prod['time'];echo'</span></div>';	
						    echo '<h6>';echo $prod['name'];echo'</h6>';	
						    echo '<img src="assets/icons/149220.svg" alt="Estrella" width="15px"><span style="margin-left:10px;font-size:16px;font-weight:600">';
						    		echo $prod['qualification'];
						    echo'</span>';
						    echo '<span style="margin-left:10px;font-size:16px;font-weight:600"> $';echo $prod['price'];echo'</span>';				    
						    echo '</div>';
						}
					?>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery-3.4.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>