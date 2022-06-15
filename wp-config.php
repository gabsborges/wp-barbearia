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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'barbearia' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '@m)$W|ranPcGlTJ{Z;CywGoM[-itiB5_7K?wn*m|BCwSGWJ).IR *}!!a>tKj[]_' );
define( 'SECURE_AUTH_KEY',  'Uc`4b-LqZjeDpoKjtm-ze@~*aZj>(Y8ScEjwcjIbMd*5AF:^Q![>l*k$W=U?RzT<' );
define( 'LOGGED_IN_KEY',    '&etKLtR&ZMYRIjqTeN:K-MQ=EA@? QSt[j1vabyIjJnZKPc7>ZX|}]QQZrx**ZRC' );
define( 'NONCE_KEY',        '?Lve.1WvH/9n`Xa9f)?]X*6mNp35M,tw3~.$i)DNeH=%SKc6G>WB6Ye>q?096G5T' );
define( 'AUTH_SALT',        'P$)~7ZDA5-5XW_/Z=`SH5J/s2.r|tGb,3{!8g2cZ}hCWEyU [npzXGQ,U4Z%lmz|' );
define( 'SECURE_AUTH_SALT', ')7ezNosbSCB:}d?:X.d}d?-ALPxo$fGQ$!9Fa~b,mN67w{Gi%l|bAO&^{CLI,3fe' );
define( 'LOGGED_IN_SALT',   '+5%yQLUmDpe/Ur16Mye/JDy$=y}^r O}k$E`wRe%(GjQ3;um@b+`Ww{.T&jt%t03' );
define( 'NONCE_SALT',       'M5$gl+YN IfBptLbN@fj5ZGga7~!4R5Zw))#7^ncya/8a)V(@M75Zie:P>F_Wyc4' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
