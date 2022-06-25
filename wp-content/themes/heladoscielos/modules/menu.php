
<div class="container-menu">

    <img id="imagen03" class="imagen" src="./img/vintage.png">
    <img id="imagen03" class="imagen" src="./img/vintage.png">
    <img id="imagen03" class="imagen" src="./img/vintage.png">
  
    <?php
    /**
     * CREAR MENU
     * https://developer.wordpress.org/reference/functions/wp_nav_menu/
     * Para que al dar a un enlace se cargue en la misma pagina añadiremos esto en JAVASCRIPT
     * $("a").attr("target","_parent");
     */
    
        wp_nav_menu(array(
                    "theme_location" => "header-menu",
                    "container" => "div",
                    "items_wrap"=> "<div class='menu'>",
                    //"items_wrap" => '<ul class="nav flex-column text-center"><b>%3$s</b></ul>',
                    "menu_class" => "nav-item"
        ));
    ?>
    
</div>