<!-- https://developer.wordpress.org/reference/functions/wp_nav_menu/ -->

<div class="container-fluid menu">

	<div class="btnClose">X</div>

	<?php

	wp_nav_menu(array(

			"theme_location" => "header-menu",
			"container" => "div",
			"container_class" => "menu-content",
			"items_wrap" => '<ul class="nav flex-column text-center">%3$s</ul>',
			"menu_class" => "nav-item"

		));

	?>

</div>