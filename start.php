<?php
require 'vendor/autoload.php';

use Src\Database;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();


// echo $_ENV['DB_HOST'];

$dbConnection = (new Database())->connet();
// test code:
// it will output: localhost
// when you run $ php start.php