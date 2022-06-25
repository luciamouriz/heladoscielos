<?php get_header(); ?>

<!--=====================================
BANNER
======================================-->

<?php include("modules/banner-index.php"); ?>

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

<div class="container-fluid bg-white contenido pb-4">
	
	<div class="container">
		
		<?php if ( have_posts() ) : ?>

			<?php while(have_posts()): the_post(); ?>

			
					<h1 class="py-4"><?php the_title(); ?></h1>

					<hr class="mb-4 mb-lg-5" style="border: 1px solid #79FF39">	

					<?php the_content(); ?>	


			<?php endwhile; ?>


		<?php endif; ?>


	</div>

</div>

<!--=====================================
FOOTER
======================================-->

<?php get_footer(); ?>