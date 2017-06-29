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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'isaquebritos');

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
define('AUTH_KEY',         '`-`@z)kj,38/AHY)UeIqbte{VzMKl0kP#Etu#|W$:ky:@R+P3#wm6*Wo2hk06>Gt');
define('SECURE_AUTH_KEY',  'SawNO+2*g]!uFEvabCR~U4pWK3qa*iT6*IK~?fbVO@O.QRafqf31ll+ndTgmu|eB');
define('LOGGED_IN_KEY',    'dhx)tN]KVB[uJokgG[[!QhV(cg9>A%m>(9grqQAkPs$v&O7vKI%98f.1~Ddaa@#>');
define('NONCE_KEY',        'B YZ7*=``grZJ>6!fJB{5~B@vYLnu*3CT}Ajr%=Bz5dq3R`i>$gPl@M?Cg7E51|^');
define('AUTH_SALT',        'Bjs8DDr?Hb^{L`8n?3bBKOxfd$WFnt<j0bT#O@46Adjh{i1r<Mvc?_mJLk_!Tz?q');
define('SECURE_AUTH_SALT', 'dFt8z#Nof,0*S[TRvHP*[mFC3F^PSL(`d`(C[_34X2$kw?nDf%I mAkq1,W<}M?g');
define('LOGGED_IN_SALT',   '|,n$;i?bD<_nAc]jMk,#ntzkt&wJH,<3CH?kRKXj*P[4U3BC+(a&ZtkSzLX=DgdI');
define('NONCE_SALT',       'QE2WLPttt~58^*< cn4G+7U8YOpD]7}FqU`xiCkTYdQ,F>U5ap<43y#Ns8id3%|~');

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
