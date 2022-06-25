<?php

/**
 * FUNCION PARA AGREDAR ARCHIVOS EXTERNOS CSS Y JAVASCRIPT A LA PLANTILLA
 * https://developer.wordpress.org/themes/basics/including-css-javascript/
 */
function heladoscielos_archivos() {

    /*ARCHIVOS CSS*/
   
    //array vacio o false
    wp_enqueue_style( 'style', get_template_directory_uri() . './style.css', array(), '1.1', 'all');
    //Pasar las fuentes a https://transfonter.org/ que te genera un css, y ya podras usar todas las que quieras
    wp_enqueue_style( 'fonts', get_template_directory_uri() . './fonts/Canter/stylesheet.css', array(), '1.1', 'all');
    wp_enqueue_style( 'fonts2', get_template_directory_uri() . './fonts/Quattrocento/stylesheet2.css', array(), '1.1', 'all');
    
    
    /*ARCHIVOS JAVASCRIPT*/
    //ultimo parametro true es para ver que los scripts se carguen en el footer (buena practica siempre que se pueda)
    
   // if(!is_home()){ //Solo se ejecuta en la pagina de inicio
  
      wp_enqueue_script( 'script-funciones', get_template_directory_uri() . './js/script-funciones.js', array (), 1.1,true);
      wp_enqueue_script( 'script', get_template_directory_uri() . './js/script.js', array (), 1.1, true);
    
    
    

  }

  add_action( 'wp_enqueue_scripts', 'heladoscielos_archivos' );
  

  /**
   * FUNCIONES PARA AGREGAR MENU
   * https://developer.wordpress.org/themes/basics/theme-functions/
   * Esto aparecera cuando creamos menus en Wordpress
   */

  add_action( 'after_setup_theme', 'heladoscielos_setup' );
  function heladoscielos_setup(){

    register_nav_menus( array(
      'header-menu'   => __( 'Header Menu', 'heladoscielos' )
  ) );

  
  /**
   * AGREGAR CLASES PARA PERSONALIZAR EL MENU
   * Parametros : 1º nombre de la accion(la que quieras), 2º nombre de la funcion que va a ejecutarse
   * 3º y 4º valores por defecto (predeterminados)
   */

  add_action( 'nav_menu_link_attributes', 'agregarClases',10,1 );

  function agregarClases($atts){
      $class = "nav-link";
      $atts["class"] = $class;
      return $atts;


  }

  /**
   * HABILITAR IMAGENES DESTACADAS
   * Imagenes que nos aparecen en pequeño al lado de las entradas
   */
  add_theme_support("post-thumbnails");

  }

  /**
   * Para que podamos enviar nuestros correos a traves de wp_mail() 
   * Nos tenemos que descargar un plugin llamado WP Mail SMTP(el de una paloma) en Wordpress
   * Despues lanzamos la configuracion, le damos a gmail y configuramos en la guia que nos dice este plugin , todo!
   * SMTP: es un protocolo de transferencia de datos 
   */

// Hooks admin-post
// Estos dos hooks configuraran nuestro formulario, como vemos el 1º parametro termina en process_form
// tal como se indica en el formulario de page-contacto.php el value de la caja oculta
add_action( 'admin_post_nopriv_process_form', 'send_mail_data' );
add_action( 'admin_post_process_form', 'send_mail_data' );

// Funcion callback
function send_mail_data() {

  /*Por defecto la funcion wp_mail() es de tipo texto, asi que para poder añadir HTML al mensaje
  *Usaremos el filtro wp_mail_content_type y le añadiremos una funcion que devuelve un string que le dice
  * que queremos que sea texto y html
  */
  function html_mail_content_type() {
    return 'text/html';
  }
  add_filter( 'wp_mail_content_type', 'html_mail_content_type' );

  //Cogemos los name del formulario mediante la variable definida de php $_POST
	$name = $_POST['nombre'];
	$email = $_POST['correo'];
	$message = $_POST['mensaje'];

	$adminmail = "envio.correo.php@gmail.com"; //email destino
	$subject = 'Formulario de contacto'; //asunto
	$headers = "Reply-to: " . $name . " <" . $email . ">";

	//Cuerpo del mensaje
	$msg = "<b>Nombre:</b> " . $name . "<br>";
	$msg .= "<b>E-mail:</b> " . $email . "<br>";
	$msg .= "<b>Mensaje:</b> \n\n" . $message . "<br>";

  
  //Esta funcion de wordpress envia directamente el formulario
	$sendmail = wp_mail( $adminmail, $subject, $msg, $headers);

  //Eliminamos el filtro anterior de texto/html para prevenir errores. Siempre despues de wp_mail()
  remove_filter( 'wp_mail_content_type', 'html_mail_content_type' );

  // redireccionamos la url para que no nos salga el admin-post.php
	wp_redirect( home_url("/contacto/")."?sent=".$sendmail ); //asumiendo que existe esta url

}

//funcion para añadir logo al tema
function theme_support_options() {
  $defaults = array(
  'height'      => 146, //Tamaño de la imagen
  'width'       => 146,
  'flex-height' => true, // <-- Si queremos omitir el recorte de imagen
  'flex-width'  => true
  );
  add_theme_support( 'custom-logo', $defaults );
 }
 // call the function in the hook
 add_action( 'after_setup_theme', 'theme_support_options' );
 
 
 // I'm not a big fan of the 'header-text' setting to hide elements by class name if a logo exists. You can simple use a condition statement in your header.php to accomplish the same thing, and it's more clear what is occurring.
?>