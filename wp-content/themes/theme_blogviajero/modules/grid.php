<?php

	$args = array(

		'post_type' => 'grid',
		'orderby' => 'title',
		'order' => 'ASC'

	);

	$grid = new WP_Query($args);
	while($grid->have_posts()): $grid->the_post();


	$link01 = get_category_link(get_field("link_1")[0]);
	$link02 = get_category_link(get_field("link_2")[0]);
	$link03 = get_category_link(get_field("link_3")[0]);
	$link04 = get_category_link(get_field("link_4")[0]);
	$link05 = get_category_link(get_field("link_5")[0]);
	$link06 = get_category_link(get_field("link_6")[0]);


?>

<div class="container-fluid py-2 py-md-5 bg-white grid">

	<div class="container p-0">

		<div class="d-flex">

			<div class="d-flex flex-column columna1">
			
				<figure class="p-2 photo1" vinculo="<?php echo $link01; ?>" style="background-image: url(<?php echo the_field("imagen_1"); ?>); background-size:cover;background-position:left center;">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo the_field("titulo_1");?></p>

				</figure>

				<figure class="p-2 photo2" vinculo="<?php echo $link02; ?>" style="background-image: url(<?php echo the_field("imagen_2"); ?>); background-size:cover;background-position:left center;">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo the_field("titulo_2");?></p>

				</figure>

				<figure class="d-block d-md-none p-2 photo6" vinculo="<?php echo $link06; ?>" style="background-image: url(<?php echo the_field("imagen_6"); ?>); background-size:cover;background-position:left center;">
					
					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo the_field("titulo_6");?></p>

				</figure>

			</div>

			<div class="d-flex flex-column flex-fill columna2">

				<div class="d-block d-md-flex">

					<figure class="p-2 flex-fill photo3" vinculo="<?php echo $link03; ?>" style="background-image: url(<?php echo the_field("imagen_3"); ?>); background-size:cover;background-position:left center;">

						<p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo the_field("titulo_3");?></p>
						
					</figure>

					<figure class="p-2 flex-fill photo4" vinculo="<?php echo $link04; ?>" style="background-image: url(<?php echo the_field("imagen_4"); ?>); background-size:cover;background-position:left center;">
						
						<p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo the_field("titulo_4");?></p>

					</figure>

				</div>

				<figure class="p-2 photo5" vinculo="<?php echo $link05; ?>" style="background-image: url(<?php echo the_field("imagen_5"); ?>); background-size:cover;background-position:left center;">

					<p class="text-uppercase p-1 p-md-3 p-xl-4"><?php echo the_field("titulo_5");?></p>
					
				</figure>

			</div>

		</div>

	</div>

</div>

<?php 

endwhile; 

wp_reset_postdata(); 

?>