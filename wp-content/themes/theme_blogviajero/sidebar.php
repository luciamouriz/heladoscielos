<div class="d-none d-md-block pt-md-4 pt-lg-0 col-md-4 col-lg-3">

	<?php

	if(is_category()){

		if(is_active_sidebar('widgets-category-1')){

			dynamic_sidebar('widgets-category-1');

		}
	}

	if(is_single()){

		if(is_active_sidebar('widgets-article-1')){

			dynamic_sidebar('widgets-article-1');

		}

	}

	if(is_home()){

		if(is_active_sidebar('widgets-index-1')){

			dynamic_sidebar('widgets-index-1');

		}

	}

		

	?>

	<!-- ARTÍCULOS RECIENTES O RELACIONADOS -->

	<div class="my-4 articulosRecientes">
		
		<h4>Artículos Recientes</h4>

		<?php

		if(is_category()){

			$categoria = get_query_var("cat");
			$cat = get_category($cat)->slug;

		}

		if(is_single()){

			global $post;
			$idCategoria = get_the_category($post->ID);
			$cat = get_category($idCategoria[0]->cat_ID)->slug;

		}

		if(is_home()){

			$cat = "";

		}

		$secondary_query = new WP_Query( array( 'category_name' => $cat, 'posts_per_page'=>3 ));

		while ( $secondary_query->have_posts() ):$secondary_query->the_post();


		?>

		<div class="d-flex my-3">
			
			<div class="w-100 w-xl-50 pr-3 pt-2 imgRecientes">
				
				<a href="<?php the_permalink(); ?>">

					<?php the_post_thumbnail( 'post-thumbnails'); ?>

				</a>

			</div>

			<div class="textoRecientes">

				<a href="<?php the_permalink(); ?>" class="text-secondary">

					<small><?php the_excerpt(); ?></small>	

				</a>

			</div>

		</div>

		<?php endwhile; ?>	

	</div>

	<?php

	if(is_category()){

		if(is_active_sidebar('widgets-category-2')){

			dynamic_sidebar('widgets-category-2');

		}
	}

	if(is_single()){

		if(is_active_sidebar('widgets-article-2')){

			dynamic_sidebar('widgets-article-2');

		}

	}

	if(is_home()){

		if(is_active_sidebar('widgets-index-2')){

			dynamic_sidebar('widgets-index-2');

		}

	}

	?>
	
</div>