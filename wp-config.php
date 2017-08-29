<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nlp_');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'j4nPP9ZQe~p*F,(d?L`SY%1wcjt^<;wy;&TtYR!/c{)FYpbH55)yw7%BZaH3Z#V}');
define('SECURE_AUTH_KEY', '/j3Ci;=^hcF2$=dgo;j6 U8Wc.tCyxNDuY5!mA6O4*Ig#rHWGU-mf.NRDt0O3<3*');
define('LOGGED_IN_KEY', '<1@N5F6$i*<$gR{Wsp>`W(R+;T)zAcZ-7]y;?o^5V`Ei8QnKepQ$5HDqUPdr+GVN');
define('NONCE_KEY', '}>s&k.i;i`&qP[Md[?aWq$L~X3m/X[d2Y6uJ/E%oh#+jpQi2$Z5S&6YMkC!MdQZn');
define('AUTH_SALT', 'O@8owE _r|qHR<;le~&D]Y9k(^~`eLgd.zT=,`4Qz9!/:Y!M_zW~IKC^a):g{$`.');
define('SECURE_AUTH_SALT', 'u1uiANn2@d|*<*B!Fxl1w#|1*VI4^@+V W%9cm9RoK$:{Va>kRN~nWsWaP}[3OVo');
define('LOGGED_IN_SALT', 'gmm9CLx7J9pl.zF}4P[nk)%=|6R/|rf@J4}Y-CMqUI:}c8zS?IG;GQ^<;Yf((~`t');
define('NONCE_SALT', 'f=92w3L(~(Xx<O1hlgv,g.yAtb|/PRGK,Kd-6r1phldKe]x)nuuab=u4`1_C}M]2');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'nlp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

