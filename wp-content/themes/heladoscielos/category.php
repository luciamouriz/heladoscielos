
<?php get_header(); ?>
<?php 
/**
 * AÑADIR ENTRADAS DE LAS CATEGORIAS 
 * https://developer.wordpress.org/themes/basics/the-loop/
 * Funciones propias de wordpress para añadir entradas, titulos, portadas que hemos configurado en wordpress
 * para que se podamos utilizar wordpress visualmente para borrar, añadir y modificar.
 * 
 * Nos apareceran las entradas de esa categoria que le asignamos en el mismo Wordpress Visual
 * HACERLO DINAMICO
 */
if ( have_posts() ) : //tiene entradas??
    while ( have_posts() ) : the_post(); //recorre las entradas que tenemos activas?>
    <div class="categories">
        <a href="<?php the_permalink(); ?>"><h5><?php the_title(); //titulo de la entrada?></h5></a>
        <a href="<?php the_permalink(); //Enlace?>">
            <?php the_post_thumbnail("post-thumbnails", array("class"=>"img-fluid")); //portada pequeña de la entrada?>
        </a>
        <p class="fecha"><?php the_time('d.m.Y');?></p>
    </div>
    
 <?php  
  endwhile; 
endif; 
?>
    

<?php get_footer(); ?>