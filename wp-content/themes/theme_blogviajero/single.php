<?php get_header(); ?>

<!--=====================================
BANNER
======================================-->

<?php include("modules/banner-interior.php"); ?>

<!--=====================================
BUSCADOR PARA MÓVIL
======================================-->

<?php include("modules/buscador-movil.php"); ?>

<!--=====================================
MENU
======================================-->

<?php include("modules/menu.php"); ?>

<!--=====================================
CONTENIDO BLOG
======================================-->

<div class="container-fluid bg-white contenido py-2 py-md-4">
	
	<div class="container">

		<?php 

		 	global $post;


		 	$idCategoria = get_the_category($post->ID);
			$nombreCategoria = get_category($idCategoria[0]->cat_ID)->name;
			$slugCategoria = get_category($idCategoria[0]->cat_ID)->slug;
			$linkCategoria = get_category_link($idCategoria[0]->cat_ID);

		?>

		<!-- BREADCRUMB -->

		<a href="<?php echo $linkCategoria; ?>">
			
			<button class="d-block d-sm-none btn btn-info btn-sm mb-2">
			
				REGRESAR 

			</button>

		</a>

		<ul class="breadcrumb bg-white p-0 mb-2 mb-md-4 breadArticulo">

			<li class="breadcrumb-item inicio"><a href="<?php echo esc_url(home_url("/")); ?>">Inicio</a></li>

			<li class="breadcrumb-item"><a href="<?php echo $linkCategoria; ?>"><?php echo $nombreCategoria; ?></a></li>

			<li class="breadcrumb-item active"><?php the_title(); ?></li>

		</ul>
		
		<div class="row">
			
			<!-- COLUMNA IZQUIERDA -->

			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
				
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

				<div class="container">

					<div class="d-flex">
					
						<div class="fechaArticulo"><?php echo the_time('d.m.Y'); ?></div>

						<h3 class="tituloArticulo text-right text-muted pl-3 pt-lg-2"><?php the_title(); ?></h3>

					</div>

					<?php the_content(); ?>

					<?php echo do_shortcode('[ess_post share_type="count"]'); ?>
	

					<!-- AVANZAR - RETROCEDER -->

					<div class="clearfix"></div>

				 	<div class="d-md-flex justify-content-between my-3 d-none">
					    
					   

					    <?php previous_post_link('%link', 'Leer artículo anterior');

					    next_post_link('%link', 'Leer artículo siguiente'); ?>
					    
					   

				  	</div>

				  	<!-- DESLIZADOR DE ARTÍCULOS -->

				  	<section class="jd-slider deslizadorArticulos my-4">
				  		
						<div class="slide-inner">
							
							<ul class="slide-area">

								<?php $secondary_query = new WP_Query( 'category_name='.$slugCategoria ); ?>

							 	<?php while ( $secondary_query->have_posts() ):$secondary_query->the_post(); ?>

								  	<li class="px-3">
									
									<a href="<?php the_permalink(); ?>" class="text-secondary">

										<?php the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid' )); ?>

										<h6 class="py-2"><?php the_title(); ?></h6>

									</a>

									 <small><?php the_excerpt(); ?></small>

									</li>
								 
								<?php endwhile; ?>							

							</ul>

							<a class="prev" href="#">

				                <i class="fas fa-angle-left text-muted"></i>

				            </a>

				            <a class="next" href="#">

				                <i class="fas fa-angle-right text-muted"></i>

				            </a>

						</div>

						 <div class="controller">

				            <div class="indicate-area"></div>

				        </div>

				  	</section>

				  	<!-- BLOQUE DE OPINIONES -->

				  	<h3 style="color:#8e4876">Opiniones</h3>

				  	<hr style="border: 1px solid #79FF39">

				  	<?php

				  	$comentarios = get_comments(array(

				  		'post_id' => $post->ID,
				  		'status' => 'approve'
				  		
				  		));

				  	if(count($comentarios) > 0){

				  		wp_list_comments(array(

				  			'per_page' => 10

				  		),$comentarios);

				  	}else{

				  		echo "Aún no hay comentarios en este artículo.";
				  	}

				  	?>
	
					<hr style="border: 1px solid #79FF39">

					<!-- FORMULARIO DE OPINIONES -->
					<!-- https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comments/  -->

					 <?php comment_form(); ?>	

					<!-- PUBLICIDAD -->


					<img src="img/ad01.jpg" class="img-fluid my-3 d-block d-md-none" width="100%">


				</div>

				<?php endwhile; ?>

			<?php endif; ?>

				

			</div>

			<!-- COLUMNA DERECHA -->

			<?php get_sidebar(); ?>

		</div>

	</div>

</div>

<!--=====================================
FOOTER
======================================-->

<?php get_footer(); ?>