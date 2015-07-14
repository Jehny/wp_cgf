<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_cgf');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#vUwwYu|wx?fg|s6=Y}=,d6M.&(gD2=p6C+yf|2o?sTDc(m-hEi|`D^_.wGv/2}m');
define('SECURE_AUTH_KEY',  '/+`~;vu-}f9&UE)(>Z],_l,qj+!]A3`.|Tr?yWJVcm[qYon42w*z}Y),aJQOaR.n');
define('LOGGED_IN_KEY',    '%t0-(]kc,/3zwmerHXfv}:0fw4X[<BzTa(@2-(d!~=WZ6pQ<Be)]aX!AHZ. [zpq');
define('NONCE_KEY',        'lG_|ZVyKByUFzkrSt)`)hZ@6J~AU.JRA*HDp~}aB~QL_bWCg}^/8xvS!N;KlK7QX');
define('AUTH_SALT',        'Z5*[2$oeqc(|59mF}T3*`7%~1~{0P|v-C*](mHoQos#T9Rj@OmK|v1zh7^O<]>c`');
define('SECURE_AUTH_SALT', '=Y6#[5KQa)-!4Ih4ekA?5=4L(R{4gDq#z8Y7#V5>:H-)CI2[Dsa!akX;ePVVd`U4');
define('LOGGED_IN_SALT',   '?!m9z@LK!G]lZb-=Z]a#8J=D/8}}^>`e:$xIu>IX;[K}Rd~k|APGU8(t6#GCpm=_');
define('NONCE_SALT',       ';# |/D6@KK~VJkZB$Nc+AU$Shm,<.hy|:[z,8?aQ{BqJm-#hiD )f1*qEQO_,L#^');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
