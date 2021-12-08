<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Fashion Store</title>
		<link rel="stylesheet" href="styles.css" />
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body onload="autolog(); inicio(); verificarlog();">
		<div id="container">
			<!-- CABECERA -->
			<header>
				<div id="logo">
					<img src="src/imagenes/logo.jpg" alt="Logo" />
				</div>
			</header>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				  <li class="nav-item">
						<a id="lnk-inicio" class="nav-link" onclick="removerActive();inicio();">Inicio</a>
					  </li>
					<li class="nav-item">
						<a id="lnk-gorras" class="nav-link" onclick="removerActive();gorras();">Gorras</a>
					  </li>
                    <li id="lnk-sudaderas" class="nav-item">
                      <a class="nav-link" onclick="removerActive();sudaderas();">Sudaderas</a>
                    </li>
                    <li id="lnk-playeras" class="nav-item">
                      <a class="nav-link" onclick="removerActive();playeras();">Playeras</a>
                    </li>
                    <li id="lnk-chamarras" class="nav-item">
						<a class="nav-link" onclick="removerActive();chamarras();">Chamarras</a>
					  </li>
					  <li id="lnk-otros" class="nav-item">
						<a class="nav-link" onclick="removerActive();otros();">Otros</a>
					  </li>
					  <li id="lnk-todos" class="nav-item">
						<a class="nav-link" onclick="removerActive();todos();">Todos los productos</a>
					  </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input id="buscar" class="form-control mr-sm-2" type="search" placeholder="buscar" aria-label="buscar">
                    <button class="btn btn-outline-light" type="button" onclick="buscarP();">Buscar</button>
                  </form>
                </div>
              </nav>

			<div id="content">

				<!-- BARRA LATERAL -->
				<aside id="lateral">
					<input id="logid" type="hidden" value="0" />
					<div id="login" class="block_aside">
						<h3>Iniciar Sesión</h3>
						<form id="loglateral" >
							<label for="email">Email</label>
							<input type="email" id="email" />
							<label for="password">Contraseña</label>
							<input type="password" id="password" />
							<input class="button" type="button" value="Enviar" onclick="val_login()" />
						</form>
						
						<ul>
							<li><a href="#registrar" onclick="registrar()">Registrarse</a></li>

						</ul>
					</div> 

					<div id="opcionesU" class="block_aside">
					<h3>Opciones</h3> 
					<ul>
							<li><a href="#mispedidos"  onclick="mispedidos()">Mis pedidos</a></li>
							<li><a href="#micarrito"  onclick="vercarrito()">Carrito</a></li>
						</ul>
						<input class="button" type="button" value="Cerrar seisión" onclick="cerrarsesion()"/>
					</div>

					<div id="opcionesA" class="block_aside">
					<h3>Opciones</h3>
					<ul>
							<li><a href="#pedidosencurso" onclick="pedidosencurso()" >Pedidos en curso</a></li>
							<li><a href="#todoslospedidos" onclick="todoslospedidos()">Todos los pedidos</a></li>
							<li><a href="#listaproductos" onclick="listaproductos()">Lista de prodctos</a></li>
							<li><a href="#" onclick="agregarp()">Agregar producto</a></li>
						</ul>
						<input class="button" type="button" value="Cerrar seisión" onclick="cerrarsesion();"/>
					</div>
				</aside>

				<!-- CONTENIDO CENTRAL -->
				<div id="contenidocentral">
				</div>

			</div>

            	<!-- pie de pagina -->
			<footer class="bg-dark text-center text-white">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                  <!-- Section: Social media -->
                  <section class="mb-1">
                    <!-- Facebook -->
                    <a class="btn btni btn-floating m-1" href="#!" role="button" onclick="facebook()">
                        <img src="src/imagenes/facebook.png" width="20px" height="20px">
                            </a>
              
                    <!-- Twitter -->
                    <a class="btn btni btn-floating m-1" href="#!" role="button" onclick="twitter()">
					<img src="src/imagenes/twitter.png" width="20px" height="20px">
                    </a>
              
                    <!-- Instagram -->
                    <a class="btn btni btn-floating m-1" href="#!" role="button"
					onclick="instagram()"> 
                      <img src="src/imagenes/instagram.png" width="20px" height="20px">
                    </a>
   
                    <!-- Github -->
                    <a class="btn btni btn-floating m-1" href="#!" role="button"
					onclick="github()">
                      <img src="src/imagenes/github.png" width="20px" height="20px">
                    </a>
                  </section>
                  <!-- Section: Social media -->
                </div>
                <!-- Grid container -->
              
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                  © 2021 Copyright:
                  <a class="text-white" href="index.php">Arturo Mejía Hernández</a>
                </div>
              </footer>
		</div>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
       <script type="text/javascript" src="funciones.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>