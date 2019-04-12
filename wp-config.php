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
define( 'DB_NAME', 'sivananda' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'dbasiva' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '123' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', '-5v-jxeLWD8.Q{<yLZ=LW{CoXs8A5<AR7G(LmfE/*jFr$E`}P(R9?zXE5F?49=e%' );
define( 'SECURE_AUTH_KEY', 'ZL=]kQ1MF}xaqQ?vNJS>/kOefMR2Gcn3^[{JsH,P 9^jf_XPp`_sZb|QE~}W<>TU' );
define( 'LOGGED_IN_KEY', 'W)r*PXGDg)8yeC?fTG2!+Tj*7Ov=GbXA=!ogH8+Zw6D^ttct`Ew9}RqM.`R[xypk' );
define( 'NONCE_KEY', 'e;f!o;o%3U-oaj3:sozD&v A7$o~D)+=yxGT7<~cb!{qR9TEy2]w7g4frAa$JV;H' );
define( 'AUTH_SALT', '65xtnnv1atN7**A=(Hci,JSq<)8fik0dm5s%kS^h5Y/=u{Kt61djq@DJMe$n7W6f' );
define( 'SECURE_AUTH_SALT', '8j|@C4~ix|::.xPx_@F*={CY$O}/i@hb7/Im?C,6=owH[a&RX^Oeu.CS/WFwGUX>' );
define( 'LOGGED_IN_SALT', 'stno6);hv^!drnA`}LBg4d>DSk4#V{8ri4n59x([(=h@&%2b+;o#BL{IC&1E<%h8' );
define( 'NONCE_SALT', ']-i`d@EXmf.MGYaG$V.GH?85ob}<tas=qlF-P0,8.;N-c;HsD9arjst(:8iZnZco' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'sv_';


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

