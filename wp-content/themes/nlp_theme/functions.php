<?php
/******************

Imágenes

*******************/

// Activa las imágenes destacadas en el tema. No hace falta hacer nada más
add_theme_support( 'post-thumbnails' );



// Añade tamaños personalizados a WordPress
add_image_size ( 'hero', 1440, 625, array('center','center') );


// Añade tamaños personalizados a las galerías de imágenes
add_filter( 'image_size_names_choose', 'tamanos_personalizados_en_galeria' );
function tamanos_personalizados_en_galeria( $sizes ) {
    $custom_sizes = array(
        'slug' => 'Nombre' // Por ejemplo, 'hero' => 'Hero'
    );
    return array_merge( $sizes, $custom_sizes );
}

/******************

Iconos SVG

******************/

add_filter( 'upload_mimes', 'custom_upload_mimes' );
function custom_upload_mimes( $existing_mimes = array() ) {
  // Add the file extension to the array
  $existing_mimes['svg'] = 'image/svg+xml';
  return $existing_mimes;
}


/******************

MENUS DE NAVEGACIÓN

******************/

// Registra los menús de navegación que va a utilizar el tema
function nlp_nav_menus() {
	$locations = array(
		'main-nav-menu' => __( 'Main Menu', 'text_domain' ),
		'rrss-nav-menu' => __( 'Menu RRSS', 'text_domain' ),
	);
	register_nav_menus( $locations );
}

// Hook. Engancha los menús registrados a la acción init o inicial de WordPress (cuando carga todas las rutinas internas)
add_action( 'init', 'nlp_nav_menus' );

/* Una vez hecho esto, es necesario llamar a los menús desde las páginas. En nuestro caso, irá en el header y le pasaremos una serie de argumentos:
*/
$args = array(
	'theme_location'  => 'Main Menu',
	'menu'            => '',

	'container'       => false, // No queremos que el ul con los li esté metido en un contenedor. Podríamos ponerle nav o div
	'container_class' => '',
	'container_id'    => '',

	'menu_class'      => 'wrapper', // Clase que le daremos al menú
	'menu_id'         => '',

	'echo'            => true, // Sí, queremos que lo pinte
	'fallback_cb'     => false, // No, no queremos un fallback
	'before'          => '', // Sin elemento antes
	'after'           => '', // Sin elemento después
	'link_before'     => '', // Sin link antes
	'link_after'      => '', // Sin link después
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // La forma que adoptará
	'depth'           => 0, // Sin profundidad definida
	'walker'          => '' // Si el menú es un objeto tipo walker
);

	wp_nav_menu($args); // Llamada al menú




/******************

BIBLIOTECAS JS

******************/

// WP ya trae una preinstalación de jQuery. Simplemente tenemos que activarla y definir la secuencia en la que se cargarán los scripts

function encolamiento_scripts() {
  // Nos aseguramos que no estamos en el panel de admin
  if (!is_admin()) {

    //Llamamos a jQuery
    wp_enqueue_script('jquery');
    
    //llamamos a otras librerías y nuestro js
    wp_enqueue_script('nl_isotope', get_stylesheet_directory_uri() . '/js/isotope.3.js', array('jquery'), '1.0', true);
    wp_enqueue_script('nl_scrollreveal', get_stylesheet_directory_uri() . '/js/scrollreveal.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('nl_mainjs', get_stylesheet_directory_uri() . '/js/index.js', array('nl_isotope', 'jquery'), '1.0', true);

  }
}

// Hook. Vinculamos la acción encolamiento_scripts al inicio de WordPress
add_action('init', 'encolamiento_scripts');



/******************

TEMAS HIJOS

******************/

/* Código para enlazar el tema hijo con el padre. No es necesario modificar nada.

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}


// En style.css es necesario crear un comentario inicial que incluya:
// Theme Name: Mi-tema Child
// Template: folder-del-tema-padre

*/



/******************

PERSONALIZACIÓN DEL LOGIN

******************/


// Creamos una función que inyectará un fragmento de estilo en línea (<style></style>) en la cabecera de la pantalla del login.
function personalizacion_login() {
    echo
    '<style type="text/css">
        body.login { background:#222; }
        .login h1 { margin:40px 0 40px;background: url('.get_bloginfo('template_directory').'/images/camoati.svg) no-repeat center; background-size: contain; height:150px;}
        .login h1 a { display:none; }
    </style>';
}

// Añadimos la acción que llama a dicha función al cargar el head del login
add_action('login_head', 'personalizacion_login');





/******************

WIDGETS

******************/

// Registramos una zona que servirá para mostrar widgets

function crear_sidebar(){
    $args = array(
    'name'          => 'Sidebar para widgets',
    'id'            => 'sidebar-widget',
    'description'   => '',
    'before_widget' => '<div class="widget-lang">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>' );
    register_sidebar($args);
}

// Añadimos la acción para cargar el sidebar cuando WP inicializa los widgets
add_action('widgets_init','crear_sidebar');


/*********************

EXTRACTOS PARA PÁGINAS

**********************/

// Creamos una función que añade extractos en las páginas
function extractos_en_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// Cargamos la función al inicio de WP
add_action( 'init', 'extractos_en_pages' );


// Devuelve un texto parcial (extracto) dado una cadena y un límite de caracteres
function extracto_de_contenido($str,$limit){
  // Removemos las etiquetas HTML para no romperlas
  $str = strip_tags($str);

  // Si la cadena es mayor que el límite
  if (strlen($str) > $limit) {

      // Truncar cadena
      $strCut = substr($str, 0, $limit);

      // Nos aseguramos que acaba en una palabra completa y acabamos con espacio [...]
      $str = substr($strCut, 0, strrpos($strCut, ' ')).' [...]'; 
  }

  return $str;
}

/********************

AÑADIR CÓDIGO ABREVIADO

*********************/

// Podemos crear código HTML o Php que luego insertaremos de forma abreviada en las páginas del tema. Para ello creamos una función que imprime el código deseado
function custom_form(){

    $this_page    =   $_SERVER['REQUEST_URI'];

    echo '<form id="inquiry-form" action="'.$this_page.'" method="POST">
    <input id="contact-subject" name="contact-subject" type="hidden" value="General" />
    <label for="contact-name">Nombre</label>
    <input id="contact-name" name="contact-name" required="" type="text" placeholder="Su nombre completo" />
    <label for="contact-email">Email</label>
    <input id="contact-email" name="contact-email" required="" type="email" placeholder="Su email" />
    <label for="contact-source">¿Cómo nos ha conocido?</label>
    <div class="select-field">
    <select name="contact-source" required="">
        <option value="1">Búsqueda web</option>
        <option value="2">Un amigo</option>
        <option value="3">www.finestmoments.de</option>
        <option value="4">www.finestfamily.de</option>
        <option value="5">Publicidad</option>
    </select>
    </div>
    <label for="contact-message">Mensaje</label>
    <textarea id="contact-message" name="contact-message"></textarea>
    <input class="btn btn-green" type="submit" value="Enviar" />
    </form>';
}

// Añadimos el shortcode. El primer parámetro especifica cómo lo llamaremos dentro de las páginas, el segundo la función que debe ejecutar.
add_shortcode('form_sc','custom_form');

/*
En las páginas de la plantilla que queramos que contengan el código, bastará llamar a la función WP do_shortcode en el lugar deseado

do_shortcode( '[form_sc]' );
*/

/****************

FOOTER SPECIFIC

*****************
function projectsFooter() { 
  global $post;
  if (is_single($post->ID) && in_category('projects.', $post->ID)) {
?>
  <script>
      (function(){

        var config = {
          viewFactor : 0.15,
          duration   : 800,
          distance   : "0px",
          reset: false,
          scale      : 0.8,
          mobile: true,
          useDelay: 'always',
          viewFactor: 0.1
        }

        window.sr = new ScrollReveal(config)
        sr.reveal('.item', { container: '.portfolio_container' });

      })();
    </script> 
<?php 
  }
}
add_action('wp_footer', 'projectsFooter'); 
*/

/****************

PAGINACIÓN

*****************/

/* Para paginar un bucle que llama a numerosos posts desde category.php o similar se pueden emplear las funciones siguientes

<?php next_posts_link( 'Otras entradas' ); ?>
<?php previous_posts_link( 'Entradas nuevas' ); ?>

Dichas funciones se sitúan fuera del loop, dentro de la parte HTML que queremos que aparezcan.

Si se desea algo más complejo, se puede emplear el siguiente sistema:

		// Creamos la variable $paged pidiéndole a WP que nos diga el valor de la variable nativa paged. Pasamos $paged como parámetro de $args para realizar la búsqueda con $wp_query

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'post_type' => 'post',
      'paged' => $paged
    );

    $wp_query = new WP_Query( $args );

		// Ejecutamos el loop con WP_Query, Una vez finalizado el while($wp_query->have_posts()) y antes de acabar el if, ejecutamos las funciones de paginación. Por ejemplo:

		<div class="nav-previous"><?php next_posts_link( 'Siguiente' ); ?></div>
    <div class="nav-next"><?php previous_posts_link( 'Anterior' ); ?></div>



/**************

AJAX y VISTAS PERSONALIZADAS

***************/

/*
En ocasiones querremos evitar que el controlador de WP nos redirija a una página. Por ejemplo, queremos enviar datos a una página en PHP mediante Ajax, que esta imprima un html simple y volverlo a recoger. Para ello tenemos que evitar que WP nos redirija a una de las plantillas. la forma de conseguirlo es crear una página PHP que justo al inicio tenga el siguiente código

define('WP_USE_THEMES', false);
require_once('../../../../wp-load.php');


Con ello le decimos que no emplee el sistema de plantillas jerarquizadas pero que cargue todas las funciones de WordPress. A continuación ya podemos poner el HTML o PHP que queramos

*/




/**************

WOOCOMMERCE

***************/

// Dar soporte a woocommerce
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Quitar estilos por defecto de WooCommerce
add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Eliminar una acción de WooCommerce
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

// Cambiar la prioridad de una acción para que pinte el elemento en otra parte de la página
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 12);












?>