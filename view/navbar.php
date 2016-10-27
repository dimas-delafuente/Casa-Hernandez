
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


<div class="nav-wrap">


	<div class="mobile-nav" id="mobile-nav" >
		<ul id="mobile-list">
			<li><a href="">Inicio</a></li>
			<li><a href="">Empresa</a></li>
			<li><a href="">Productos</a></li>
			<li><a href="">Contacto</a></li>
			<li><a href="">Ofertas</a></li>
			<li><a href="">Blog</a></li>
		</ul>

	</div>
	<header role="banner">

		<div class="container">
			<div class="nav-inner">
				<nav class="site-nav" role="navigation">

					<div class="nav-start" role="nav">
						<ul>
							<li><a href="">Inicio</a></li>
							<li><a href="">Empresa</a></li>
							<li><a href="">Productos</a></li>

							
						</ul>
					</div>
					<div class="logo">

						<a href=""><img src="../images/logo.svg" alt=""></a>

					</div>
					<div class="nav-end" role="nav">
						<ul>
							<li><a href="">Contacto</a></li>
							<li><a href="">Ofertas</a></li>
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

