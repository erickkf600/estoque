<?php
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
define('DB_NAME', 'accio-store');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'ySY3X-cx4$rpLp7<<g&^D|TG`{=*ae.[?%C3pAq~b)$PE1vxl2>gyQGdOu/;yeIW');
define('SECURE_AUTH_KEY',  'Tdxr`Xl+K`dG>,0Fg{NMe-ZeL<XprK` S#vhFe8vOxwXj>#l4O~L0/`{1$:CaX*2');
define('LOGGED_IN_KEY',    '4IDxzs=9|Z#@h9d=4_Sly6G&#pT^r< nkj/Qj|KVFWrjk9n;@T*F<FR-nmEJ:9,1');
define('NONCE_KEY',        'Ay)8qBQNM2MPLHzzK=n!*:=a[t5Cp;>l0_?,V*qU@oO!U.hH|wJ4:d,!!f1F%90j');
define('AUTH_SALT',        '! FJj,.o+GcUR_{A,gH!&bmmVB`mTE[I;k-?t2=)^6I>U<r74PanE8AM=SK0Bhs?');
define('SECURE_AUTH_SALT', ')tXlAbvq/Xw8&l$a2>7S|7Pd7R}=*3%;V,08EQPYuQBW$aC}&H;qL8z$~Yo~<i~m');
define('LOGGED_IN_SALT',   'G&E%7;k_4MFk*.cEi`O,nY--MRA-_t&B%=}YpQN)q|AM_A8PPMB-v}Rxl=T3JJ# ');
define('NONCE_SALT',       'o7/Q MC+Dep<1<04-6T-lHR@u>i:J5E<d%=?0gqrXYbOqUBlOeDv<b1UrppdcP7g');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
