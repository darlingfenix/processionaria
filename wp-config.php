<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'wp_processionaria');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6hcBFwnRb6ER M#ug0M <p&_EO=6`JpQIzl:fDfEL-S:_sZNlz6l|fJ$+d7`$|D8');
define('SECURE_AUTH_KEY',  'Kjx:hhkmQ]vxSjaBRN|I>j:UmK{^8b0$9OP;~4!quU9E%g^ir%l$o4yyoKov<]|b');
define('LOGGED_IN_KEY',    '9n?4hi*(8&=rli~iXT%`UPI$5RZ-Gp2JCLM@i-uF`1b2+-b`e~:^](>GBjf%jg[o');
define('NONCE_KEY',        's9FvD7xg{a3w|Dp+v(uR]NLA-foh@F43lQfNeWA7R/.ro4$.MnR|F?- :j#> rcF');
define('AUTH_SALT',        'IK,sb|$YA_%]n=DXkFksjlf+Sc4jxC/qZve/rpzrN:?S<h_|]?=KbP$dE=r-fk,9');
define('SECURE_AUTH_SALT', '%VRaLIpM&;B1I06p58,/:#uNfd)wSt921,`)mO_jp2s,f1``#9s;El7gi.%I^Unf');
define('LOGGED_IN_SALT',   'cu|+o7l^]w?z~_C:8F}ed~$/F_5Sc-k*8H8AexM%YIKMql|])eDV(k[Ma(ccG&}=');
define('NONCE_SALT',       'i^w_pV(D%N7)7[.4)?sJ]d~-$ZhgQ-tOJZouXg&eTnNTp,)z,MI-!wWBVMzG35%z');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');