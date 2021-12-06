<?php

$config['hostname'] = "localhost";
$config['dbuser'] = "dbuser";
$config['dbpassword'] = "dbpassword";
$config['dbname'] = "dbname";
$config['sitetitle'] = "sitetitle";

define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('TITLE', 'sitetitle');

return array(
    'host' => 'localhost',
    'username' => 'root',
);

$configs = include('configdb.php');

?>
