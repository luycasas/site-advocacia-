<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'bCFnYTB6LnQvfUdDdklwVi4lMzE7ckJZaiZyW2hYQnlCdVI0PDclIzwuXVVDWGg4QENKQ1BwbC5ALmkqIzldNw==' );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
define('DISABLE_WP_CRON', true);
define('CONCATENATE_SCRIPTS', false);
define('WP_CACHE_KEY_SALT', '45e71981d238927afdc3bac5565e4326');
// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define('WP_CACHE', false); // Added by WP Rocket
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */
// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_gan7v');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'wp_anhct');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'xj@Qc12WYq6YGD&i');
/** Nome do host do MySQL */
define('DB_HOST', 'localhost:3306');
/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');
/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');
/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '_u*v#4c1tbP48rL74nZ5JvIOc7Y_&Za%P]P0H5Aq0CZ-X6827&1i~hhWk;uA7K08');
define('SECURE_AUTH_KEY', '9v_G42N3b+w~(J9y4%8#6(xQeln7:66+@(_RlHJP&:0o9|5W0:Prp!4[%qL0~El~');
define('LOGGED_IN_KEY', 'u*5**%7CI/40)z%YRzPb3OGrUx2||8mTUs7y+8|*(nCoT43A7S_2R@x]r006HeM3');
define('NONCE_KEY', '/7Z1fd(l;ghy5(_6vWjDS9-e29z-B06ec45*h3H/s3R[/lv*f5ys&M8D8HkHLsMz');
define('AUTH_SALT', 'or!9Ytwc%RebM9:6275[pcDWJk/Q[5i1dwY53F32W9n~_tAr38|J0bO+3Q-IVr3&');
define('SECURE_AUTH_SALT', 'Q4np]W(Ms;G:;]ig0+Mu[_TC*9C2J%tQL6]OA%n6&O4A[*pvS;/&7~pfXLgc2IsY');
define('LOGGED_IN_SALT', 'HRX7/42T23@dMk|jB6K_%&x@[4ac3x/M0D4C~9w8x7u+b0u6-ok-O3@I-gvI-u(&');
define('NONCE_SALT', '573)H7E[;I&4a2b1uk6]KhiL%M5s66fxB0-NFh]u5e3[f1UQRO7Qm%qC245X_5X|');
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'eny47zti_';
/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);
/* Isto é tudo, pode parar de editar! :) */
/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
