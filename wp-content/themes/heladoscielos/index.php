

<?php /*Tecnica para evitar el acceso directo a archivos, para que los bots no entren a nuestra plantilla
Si no lo ponemos puede que nos salga el error que nos esta dando
si la ABSPATHconstante no está definida, salga del script
Entonces, cuando aparece un bot malo y comienza a solicitar sus plantillas de temas, simplemente obtendrá una página en blanco (respuesta vacía) del servidor.*/
    if (!defined('ABSPATH')) exit;
	get_header(); 
    

?>
<body>

    <main>
        <div class="main-contenedor-principal">
            <div class="main-contenedor-promo "> 
                <form class="main-form-promo" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST">
                    <p class="text-big">MIERCOLES <span>GRATIS</span></p>
                    <p class="text-medium">Regalamos todos los miercoles <br><b>5 HELADOS GRATIS</b> solo suscribiendote</p>
                    <input class= "input-promo" type= "text" name="nombre" id="nombre" placeholder="*Email..">
                    <input type="hidden" name="action" value="process_form">
                    <button class="button-enviar-promo" type="submit" name="enviar">Enviar</button>
                    <p class="text-small">Os enviara directamente el cupon a vuestra bandeja de entrada, con el podeis ir a cualquier establecimiento CIELOS</p>
                </form>
                <div class="fondo01"></div>
               
            </div>

            <div class="main-contenedor-helado">
                <div class="calcio">RICO EN CALCIO <img src="img/calcio.png" alt=""></div>
                <p class="grasas">BAJO EN GRASAS <img src="img/grasas.png" alt=""></p>
                <p class="gluten">SIN GLUTEN <img src="img/gluten.png" alt=""></p>
                <p class="saludable">RICO &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;SALUDABLE</p>
                <div class="fondo02"></div>
            </div>
            
            
            <div class="fondo-fijo">
                <div class="fondo03"></div>
            </div>

            <div class="main-contenedor-influencers">
                <div class="hastag">#heladosCielos</div>
                <div class="img-influencers">
                    <img class="influencer" src="img/influencer01.png" alt="Foto de influencer 01">
                    <img class="influencer" src="img/influencer02.png" alt="Foto de influencer 02">
                    <img class="influencer" src="img/influencer03.png" alt="Foto de influencer 03">
                </div>
                <div class="contenedor-establecimientos">
                    <p class="titulo-establecimientos">¡No te quedes sin el tuyo!</p><br>
                    <p>Busca tu establecimiento mas cercano</p>
                    <div class="flex-row">
                        <input class= "input-ciudad" type= "text" name="ciudad" id="ciudad" placeholder="CP o Ciudad">
                        <button class="button-buscar">Buscar</button>
                    </div>
                </div>
                <div class="fondo04"></div> 
            </div>

            <div class="main-contenedor-mapa">
                <img class="images" src="img/map.png" alt="Mapa de establecimientos">
            </div>
       </div>
    </main>
</body>


<!--=======================================
INCLUIMOS PAGINAS EXTERNAS A WORDPRESS
MODULOS PERSONALIZADOS
include "menu.php";
=========================================-->

<?php 
/**
 * AÑADIR ENTRADAS CON PORTADA
 * https://developer.wordpress.org/themes/basics/the-loop/
 * Funciones propias de wordpress para añadir entradas, titulos, portadas que hemos configurado en wordpress
 * para que se podamos utilizar wordpress visualmente para borrar, añadir y modificar.
 * 
 * HACERLO DINAMICO
 */
if ( have_posts() ) : //tiene entradas??
    while ( have_posts() ) : the_post(); //recorre las entradas que tenemos activas?>
    <div class="articles">
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
