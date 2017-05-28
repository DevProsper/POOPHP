<?php 
session_start();
require '../app/Autoloader.php';
App\Autoloader::register();

$app = App\App::getInstance();

$posts = $app->getTable('Users');
var_dump($posts);