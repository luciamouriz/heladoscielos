
<!DOCTYPE html>
<html lang="es">
<head>
    <!--====================
    == CONCATENAMOS NUESTRA URL DE DONDE ESTA NUESTRA PLANTILLA MAS UN SLASH /
    == PARA QUE SEPA LA UBICACION Y DONDE VA A BUSCAR LAS CARPETAS IMG, CSS, JS ETC..
    == MUY IMPORTANTE
    ==========================-->
    <base href="<?php echo bloginfo("template_url")."/";?>" target="_blank">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
    /*FUNCION PARA QUE FUNCIONE EL STYLE Y LOS SCRIPTS FUNCTIONS PHP EN HEADER*/
      wp_head(); 
      
    ?>
    <title>heladoscielos</title>
</head>
<body>
    <header>
        
        <!--https://developer.wordpress.org/reference/functions/wp_nav_menu/-->
        <div class="header-contenedor">
            <?php 
            //Añadimos el logo con esta funcion , despues vamos a Wordpress - personalizar plantilla - identidad - cambiar logo
            the_custom_logo();
            
            /**
             * Funcion que te añade el menu
             * header-menu es el id de la funcion heladoscielos_setup() en funcions.php
             */
            
            
            ?>
            <div class="menu-contenedor">
                <?php wp_nav_menu('header-menu');  ?>
                <div class="menu-contenedor-img">
                    <img id="imagen01" class="header-menu-img" src="./img/frame-menu.png">
                    <img id="imagen02" class="header-menu-img" src="./img/frame-menu.png">
                    <img id="imagen03" class="header-menu-img" src="./img/frame-menu.png">
                    <img id="imagen04" class="header-menu-img" src="./img/frame-menu.png">
                </div>
            </div>
        </div>
    </header>
    
</body>
</html>
