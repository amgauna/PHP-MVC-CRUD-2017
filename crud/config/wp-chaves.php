* Chaves (segurança) únicas de autenticação e salts.
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
define('AUTH_KEY',         'coloque a sua frase única aqui');
define('SECURE_AUTH_KEY',  'coloque a sua frase única aqui');
define('LOGGED_IN_KEY',    'coloque a sua frase única aqui');
define('NONCE_KEY',        'coloque a sua frase única aqui');
define('AUTH_SALT',        'coloque a sua frase única aqui');
define('SECURE_AUTH_SALT', 'coloque a sua frase única aqui');
define('LOGGED_IN_SALT',   'coloque a sua frase única aqui');
define('NONCE_SALT',       'coloque a sua frase única aqui');
