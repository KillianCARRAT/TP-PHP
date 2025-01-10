<?php
require_once __DIR__ . '/src/config/autoload.php';

use Src\Config\Autoloader;

use \src\config\input\Classes\Form\Type\Text;
use \src\config\input\Classes\Form\Type\Checkbox;
use \src\config\input\Classes\Form\Type\Radio;
use \src\config\input\Classes\Form\Type\Textarea;

Autoloader::register();

$test = new Text('test', true, 'Jaune');
echo $test->render();


switch ($_GET['action']){
    case "submit":
        require_once "a";
        break;
    case "reponse":
        require_once "b";
        break;
    default :
        require_once "src/views/uneVue.php";
        break;
}
