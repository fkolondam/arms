<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

return [
    'app_name' => getenv('APP_NAME'),
    'base_url' => getenv('BASE_URL'),
    'debug' => getenv('DEBUG'),
];
?>