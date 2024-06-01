<?php
use Dotenv\Dotenv;

require 'vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

var_dump(getenv('APP_NAME'));
   var_dump($_ENV['APP_NAME']);
   var_dump($_SERVER['APP_NAME']);
?>