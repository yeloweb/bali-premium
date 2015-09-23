<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bali-premium');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HPEf{W2rwzi)IO.<.[BTI[_S?UHyGBi=kxK?215N]8+k87b5VBWdC/a%rD)_s&|_');
define('SECURE_AUTH_KEY',  'DePQ7^b2I_U|s~ZJQ~rb#rO[LHe9#OZ`m7D^_<Mvp3x`~_H+3Uzzmso=!>Ew@z[|');
define('LOGGED_IN_KEY',    '+KwxAyD3LkSEmAe3WG]3:PdOB>>_3!jVG7E0a`tSgmSz4e::yB-/kCh|>q4[S5U0');
define('NONCE_KEY',        'jGLMQ!4~+AU7Ak.op|?V.G+|c}8)LI0;Ca!#w)wEw0-lk8){t!@1mT{-d]s5+-rc');
define('AUTH_SALT',        'RC[y_vm$K#BdfcV#@Z;>0r9nfC |brG7T6dEr1OReGQ3Qy7+^VE0f~c(; NOzeW.');
define('SECURE_AUTH_SALT', '(cf0,4<kMY5<fM^|]vQ8q7k18JdO+Y9;fa>0-EY=@|I$EhDbVPhsE%ozLf463~O!');
define('LOGGED_IN_SALT',   'wDoJSNOJ54Mkv5xA}`aC!&PI2Ic4g];:q6t/cZ6kOOwifDHC{=fzL-!i?:]p-IWQ');
define('NONCE_SALT',       '*`80)$=R[:>*FWY%L::.*pqps%6e>Bg@ >6jinJ``5.xlYH6/!@+1yXupieikDxz');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'bali_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');