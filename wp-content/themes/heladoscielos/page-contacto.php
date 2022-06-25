
<?php get_header();
/*
Template Name: Página de Contacto
*/
/* AÑADIMOS TEMPLATE NAME PARA QUE NOS APAREZCA UNA PAGE APARTE Y ENLAZARLA CON WORDPRESS MEDIANTE
UNA OPCION QUE SALDRA EN "PAGINAS EN WORDPRESS" QUE DICE PLANTILLA Y YA ELEGIMOS PAGINA DE CONTACTO
*https://developer.wordpress.org/themes/template-files-section/page-template-files/ 

Tenemos que escribirla con la misma nomenclatura page-"slugWordpress" y dejarla en la carpeta raiz es decir, en este caso en,
heladoscielos*/

 ?>
<main>
    
    <?php

    if ( isset($_GET['sent']) ){
        if ( $_GET['sent'] === '1'){
            echo "<p> ✔ Formulario enviado correctamente</p><br>";
        }
        else {
            echo "<p> Hubo un error al enviar</p><br>";
        }
    }

    /**
     * admin-post es una configuracion de wordpres con el que podemos enviar un formulario
     * En el action del formulario vamos a añadirle la url entera de nuestro servidor terminando con admin-post.php 
     * La clave para esta configuracion de wordpress es la caja oculta que tenemos con name="action" y value="process_form", 
     * este valor lo usaremos en functions.php
     */
    ?>

    <form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" class="form-contacto">
        <p class="titulo-contacto">Contacto</p>
        <div class="form-contacto-grupo-inputs">
            
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-contacto-nombre">
            
            <label for="correo">Email:</label>
            <input type="text" name="correo" id="correo" class="form-contacto-correo">
            
            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" class="form-contacto-mensaje" rows=24></textarea>
            
        </div>
        <div class="form-contacto-grupo-botones">
            <input type="hidden" name="action" value="process_form">
            <button type="submit" name="submit" class="form-contacto-enviar">Enviar</button>
        </div>
       
    </form>
</main>
<?php 
get_footer();
