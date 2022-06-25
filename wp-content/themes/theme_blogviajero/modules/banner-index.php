<div class="bannerEstatico">

<?php

$args = array(

		'post_type' => 'banner',
		'orderby' => 'title',
		'order' => 'ASC',
		'category_name' => 'index'

	);

$banner = new WP_Query($args);

while($banner->have_posts()): $banner->the_post();

?>

<?php the_post_thumbnail();?>

<?php endwhile; wp_reset_postdata(); ?>

</div>

<section class="jd-slider fade-slider">
	
	<div class="slide-inner">
		
		<ul class="slide-area slideBanner">
			

		</ul>

	</div>

	<div class="controller d-none">
		
		<a class="auto" href="#">
			
			<i class="fas fa-play fa-xs"></i>
			<i class="fas fa-pause fa-xs"></i>

		</a>

		<div class="indicate-area"></div>

	</div>

</section>