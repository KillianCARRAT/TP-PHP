<?php
require_once __DIR__ . 'src/config/autoload.php';

use Src\Config\Autoloader;

Autoloader::register();


switch ($__GET['action']){
    case "submit":
        require_once "a";
        break;
    case "reponse":
        require_once "b";
        break;
    default :
        require_once "";
        exit;
}
