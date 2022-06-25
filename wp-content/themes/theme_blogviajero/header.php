<!DOCTYPE html>
<html lang="en">
<head>

	<base href="<?php echo bloginfo("template_url")."/"; ?>" target="_blank">
	
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="img/icono.jpg">

	<?php wp_head(); ?>

</head>

<body>

<!--=====================================
PRELOAD
======================================-->

<div id="preload">
	
	<div id="porcentajeCarga">0%</div>
	
	<div id="lineaCarga">
		
		<div id="rellenoCarga"></div>
	
	</div>
		
	<div id="estadoCarga"></div>
	
</div>

<!--=====================================
CABECERA
======================================-->

<header class="container-fluid">
	
	<div class="container p-0">
		
		<div class="row">
			
			<!-- LOGO -->
			<div class="col-10 col-sm-11 col-md-8 col-lg-7 pt-1 pt-lg-3 p-xl-0 mt-1 mt-md-2 logotipo">
				
				<a href="<?php echo esc_url(home_url("/")); ?>">
					
				<?php

					if ( function_exists( 'the_custom_logo' ) ) {

						 the_custom_logo();

					}
				?>	

				</a>

			</div>

			<?php 

			if(is_active_sidebar("widgets-redes-sociales")){ 

					dynamic_sidebar("widgets-redes-sociales"); 
			}

			?>

			<!-- REDES SOCIALES -->
			<div class="d-none d-md-block col-md-2 col-lg-3 redes">
				
				<ul class="d-flex justify-content-end pt-2 mt-2">
			

				</ul>

			</div>

			<!-- BUSCADOR Y BOTÓN MENÚ -->
			<div class="col-2 col-sm-1 col-md-2 col-lg-2 d-flex justify-content-end pt-2 mt-1 mt-md-3">
				
				<!-- BUSCADOR -->
				<div class="d-none d-md-block pr-5 mt-1">
					<i class="fas fa-search lead" data-toggle="collapse" data-target="#buscador"></i>
				</div>	

				<!-- BOTÓN MENÚ -->
				<div class="m-0 mt-sm-1 mt-md-0 text-right">
					<i class="fas fa-bars lead"></i>
				</div>
				
			</div>

			<!-- ENTRADA DEL BUSCADOR -->

			<?php 

			if(is_active_sidebar("widgets-buscador")){ 

					dynamic_sidebar("widgets-buscador"); 
			}

			?>

			<div id="buscador" class="collapse col-12 buscador">
				
				<div class="input-group float-right w-50 pl-xl-5 pb-3">
					
					

				</div>

			</div>

		</div>

	</div>

</header>

<!--=====================================
REDES SOCIALES PARA MÓVIL
======================================-->

<div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">
				
	<ul class="d-flex justify-content-center p-0">
	

	</ul>

</div>