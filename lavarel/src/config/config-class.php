<?php

// Você pode criar uma classe de configuração com propriedades estáticas

class Config 
{
    static $dbHost = 'localhost';
    static $dbUsername = 'user';
    static $dbPassword  = 'pass';
}
então você pode simplesmente usá-lo:

Config::$dbHost  

?>
