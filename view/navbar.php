<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="../css/inicio.css">
	<link rel="stylesheet" href="../css/navbar.css">
	<link rel="stylesheet" href="../css/header.css">

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">



	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>


<div class="nav-wrap">


	<div class="mobile-nav" id="mobile-nav" >
		<ul id="mobile-list">
			<li><a href=".?action=inicio">Inicio</a></li>
			<li><a href=".?action=empresa">Empresa</a></li>
			<li><a href=".?action=productos">Productos</a></li>
			<li><a href=".?action=contacto">Contacto</a></li>
			<li><a href=".?action=ofertas">Ofertas</a></li>
			<li><a href=".?action=inicio">Blog</a></li>
		</ul>

	</div>
	<header role="banner">

		<div class="container">
			<div class="nav-inner">
				<nav class="site-nav" role="navigation">

					<div class="nav-start" role="nav">
						<ul>
							<li><a href=".?action=inicio">Inicio</a></li>
							<li><a href=".?action=empresa">Empresa</a></li>
							<li><a href=".?action=productos">Productos</a></li>

							
						</ul>
					</div>
					<div class="logo">

						<a href=""><img src="../images/logo.svg" alt=""></a>

					</div>
					<div class="nav-end" role="nav">
						<ul>
							<li><a href=".?action=contacto">Contacto</a></li>
							<li><a href=".?action=ofertas">Ofertas</a></li>
							<li><a href="">Blog</a></li>
						</ul>
					</div>

				</nav>

			</div>
		</div>
		<div class="mobile-nav-toggle" id="mobile-nav-toggle" onclick="MenuToggle();">

			<span id="menu-toggle"></span>
			
		</div>

		

	</header>
</div>

<script>
	function MenuToggle() {

		var d = document.getElementById('mobile-nav-toggle');


		if (d.className.indexOf("is-open") !=-1) {
			d.className = "mobile-nav-toggle";
			document.getElementById('mobile-nav').className = 'mobile-nav';
		}else{
			d.className += " is-open";
			document.getElementById('mobile-nav').className += ' is-open';
		}
		

	}	
	
	function getList(){
		var list = document.getElementsByTagName('li');

		for (var i = 0; i <= list.length; i++) {

			var liEl = list[i];
			document.getElementById("mobile-list").appendChild(liEl);

		} 

	}	


</script>
