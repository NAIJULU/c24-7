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
define('DB_NAME', 'med2018_clima');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'med2018_climau');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '62^{Md4nZ{GQ');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'i?iUQ+DWW;j^R-B3HnLgXsnD?Vd||-U3=m^j=6*vE0RIOSlbKee/ywgN1*y$}[>f'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '/)mU@5!iUtH%df8@h%u[Q%r!tKBo|Fs%~zV*|.X[K<[99*BIVF#RI,l7+3/ F3R;'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', '%ab-3)nvUuRrCbv`1OPFhRN6XGUxI(rMMqLz=T)->k;K5H2ma1q:rmzVcelSppe#'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '=,`Ed/R21}?a@&L^_;q6o$,yEPS#jmdZRyOudl/9nE6)d!Xt51^Geljk_9*Hh~4x'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'M^J.4_3xM-1Pg`lx$G_ps8qv/Oj]&Ny}!a/9*>6iFl7/K)iC~tmtG>VL?IHVX~ZH'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'gx9Tx+DE12;|/WDx3[LnG+{0ZF[R)GEx1]/mK(+v%*Mv[YnxM/WCANukvmHrh2}U'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'aJPN<qx*ep^C$VmX<~u{aW0=DDPjuV@oF@Jef12Zago^R&n;/~V/VOmvLbxRDPXZ'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '$S[R4:A.;|j,LM#c:o[2V3{4Xb!j.]?1s3lFmSt-+O@7AqKr8sjnOL|0Bm=0,)6r'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'c247_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define( 'WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

