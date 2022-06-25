<?php

/*=============================================
FUNCIÓN PARA AGREGAR ARCHIVOS EXTERNOS CSS Y JAVASCRIPT A LA PLANTILLA
https://developer.wordpress.org/themes/basics/including-css-javascript/
=============================================*/

function blogviajero_archivos() {

	/*=====================================
	ARCHIVOS DE CSS
	======================================*/
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.1', 'all');
	wp_enqueue_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400', array(), '1.1', 'all');
	wp_enqueue_style( 'fontAwesome', 'https://use.fontawesome.com/releases/v5.6.0/css/all.css', array(), '1.1', 'all');
	wp_enqueue_style( 'jdSlider', get_template_directory_uri() . '/css/plugins/jquery.jdSlider.css', array(), '1.1', 'all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');

	/*=====================================
	ARCHIVOS DE JS
	======================================*/
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), 1.1, false);
	wp_enqueue_script( 'popperJs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array(), 1.1, false);
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array(), 1.1, false);
	wp_enqueue_script( 'jdSlider', get_template_directory_uri() . '/js/plugins/jquery.jdSlider-latest.js', array(), 1.1, false);
	wp_enqueue_script( 'pagination', get_template_directory_uri() . '/js/plugins/pagination.min.js', array(), 1.1, false);
	wp_enqueue_script( 'superscrollorama', get_template_directory_uri() . '/js/plugins/jquery.superscrollorama.js', array(), 1.1, false);
	wp_enqueue_script( 'tweenmax', get_template_directory_uri() . '/js/plugins/TweenMax.min.js', array(), 1.1, false);
	wp_enqueue_script( 'scrollUp', get_template_directory_uri() . '/js/plugins/scrollUP.js', array(), 1.1, false);
	wp_enqueue_script( 'jqueryEasing', get_template_directory_uri() . '/js/plugins/jquery.easing.js', array(), 1.1, false);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'blogviajero_archivos' );


/*=============================================
FUNCIONES PARA AGREGAR AL ADMINISTRADOR
https://developer.wordpress.org/themes/basics/theme-functions/
=============================================*/

function blogviajero_setup() {

	/*=============================================
	FUNCIÓN PARA AGREGAR MENÚ
	=============================================*/
	register_nav_menus( array(
        'header-menu'   => __( 'Header Menu', 'blogviajero' ),
        'social-menu'   => __( 'Social Menu', 'blogviajero' )

    ) );

    /*=============================================
	AGREGAR FILTROS PARA PERSONALIZAR EL MENÚ
	=============================================*/

	add_filter("nav_menu_link_attributes", "agregarClases", 10, 3);

	function agregarClases($atts, $item, $args){

		$class = "nav-link text-white";
		$atts["class"] = $class;
		return $atts;

	}

	/*=============================================
	HABILITAR IMÁGENES DESTACADAS
	=============================================*/
	add_theme_support( 'post-thumbnails' );

    /*=============================================
    HABILITAR LOGOTIPO DINÁMICO
    =============================================*/
    add_theme_support( 'custom-logo' );

     /*=============================================
    HABILITAR TÍTULOS
    =============================================*/
    add_theme_support( 'title-tag' );
	
}

add_action( 'after_setup_theme', 'blogviajero_setup' );


/*=============================================
AGREGAR SIDEBAR PARA WIDGTES
=============================================*/
// https://developer.wordpress.org/themes/functionality/sidebars/

function blogviajero_widgets() {

	register_sidebar( array(
        'name'          => __( 'Widgets Index 1', 'blogviajero' ),
        'id'            => 'widgets-index-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );
 
   register_sidebar( array(
        'name'          => __( 'Widgets Index 2', 'blogviajero' ),
        'id'            => 'widgets-index-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Category 1', 'blogviajero' ),
        'id'            => 'widgets-category-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Category 2', 'blogviajero' ),
        'id'            => 'widgets-category-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

     register_sidebar( array(
        'name'          => __( 'Widgets Article 1', 'blogviajero' ),
        'id'            => 'widgets-article-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Article 2', 'blogviajero' ),
        'id'            => 'widgets-article-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Redes Sociales', 'blogviajero' ),
        'id'            => 'widgets-redes-sociales',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Widgets Buscador', 'blogviajero' ),
        'id'            => 'widgets-buscador',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h1 style="display:none">',
        'after_title'   => '</h1>',
    ) );

}

add_action( 'widgets_init', 'blogviajero_widgets' );

/*=============================================
CUSTOM POST TYPE BANNER
=============================================*/
// https://developer.wordpress.org/reference/functions/register_post_type/


function blogviajero_banner() {

     $labels = array(
         'name'               => _x( 'Banner', 'blogviajero' ),
         'singular_name'      => _x( 'Banner', 'post type singular name', 'blogviajero' ),
         'menu_name'          => _x( 'Banner', 'admin menu', 'blogviajero' ),
         'name_admin_bar'     => _x( 'Banner', 'add new on admin bar', 'blogviajero' ),
         'add_new'            => _x( 'Add New', 'book', 'blogviajero' ),
         'add_new_item'       => __( 'Add New Banner', 'blogviajero' ),
         'new_item'           => __( 'New Banner', 'blogviajero' ),
         'edit_item'          => __( 'Edit Banner', 'blogviajero' ),
         'view_item'          => __( 'View Banner', 'blogviajero' ),
         'all_items'          => __( 'All Banner', 'blogviajero' ),
         'search_items'       => __( 'Search Banner', 'blogviajero' ),
         'parent_item_colon'  => __( 'Parent Banner:', 'blogviajero' ),
         'not_found'          => __( 'No Banner found.', 'blogviajero' ),
         'not_found_in_trash' => __( 'No Banner found in Trash.', 'blogviajero' )

    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'blogviajero' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'banner' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' )

    );

    register_post_type( 'banner', $args );
}

add_action( 'init', 'blogviajero_banner' );

/*=============================================
CUSTOM POST TYPE GRID
=============================================*/

function blogviajero_grid() {

     $labels = array(
         'name'               => _x( 'Grid', 'blogviajero' ),
         'singular_name'      => _x( 'Grid', 'post type singular name', 'blogviajero' ),
         'menu_name'          => _x( 'Grid', 'admin menu', 'blogviajero' ),
         'name_admin_bar'     => _x( 'Grid', 'add new on admin bar', 'blogviajero' ),
         'add_new'            => _x( 'Add New', 'book', 'blogviajero' ),
         'add_new_item'       => __( 'Add New Grid', 'blogviajero' ),
         'new_item'           => __( 'New Grid', 'blogviajero' ),
         'edit_item'          => __( 'Edit Grid', 'blogviajero' ),
         'view_item'          => __( 'View Grid', 'blogviajero' ),
         'all_items'          => __( 'All Grid', 'blogviajero' ),
         'search_items'       => __( 'Search Grid', 'blogviajero' ),
         'parent_item_colon'  => __( 'Parent Grid:', 'blogviajero' ),
         'not_found'          => __( 'No Grid found.', 'blogviajero' ),
         'not_found_in_trash' => __( 'No Grid found in Trash.', 'blogviajero' )

    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'blogviajero' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'grid' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title' )

    );

    register_post_type( 'grid', $args );
}

add_action( 'init', 'blogviajero_grid' );