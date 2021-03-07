<header class = "main-header">
	
	<!-- LOGOTIPO -->

	<a href="inicio" class="logo">

		<!-- logo mini -->

		<span class="logo-mini">
			<img src="Vista/img/plantilla/icon.png" class="img-responsive" style="padding:10px">
		</span>

		<!-- logo normal -->

		<span class="logo-lg">
			<img src="Vista/img/plantilla/logolong3.png" class="img-responsive" style="padding:10px 0px">
		</span>

	</a>

	<!-- BARRA DE NAVEGACION -->
	<nav class="navbar navbar-static-top" role="navigation">

		<!-- boton de navegacion -->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle Navigation</span>
		</a>

		<!-- perfil de usuario -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<?php

						if ($_SESSION["foto"]!= "") {
							
							echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
						}else{

							echo '<img src="Vista/img/usuarios/default/anonymus.png" class="user-image">';
						}

						?>
						
						<span class="hidden-xs"> <?php echo $_SESSION["nombre"]; ?> </span>
					</a>

					<!-- dropdown-toggle -->

					<ul class="dropdown-menu">
						<li class="user-body">
							<div class="pull-right">
								<a href="salir" class="btn btn-default btn-flat">Salir</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>			
		</div>
	</nav>
</header>