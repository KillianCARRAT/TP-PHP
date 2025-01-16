<?php
require_once __DIR__ . '/src/config/autoload.php';
require_once "src/config/questions.php";

use function src\config\getQuizzes;

use Src\Config\Autoloader;

use \src\config\input\Classes\Form\Type\Text;
use \src\config\input\Classes\Form\Type\Checkbox;
use \src\config\input\Classes\Form\Type\Radio;
use \src\config\input\Classes\Form\Type\Textarea;


Autoloader::register();

$quizzes = getQuizzes();

foreach ($quizzes as $quiz) {
    $quiz->afficheInfo();
}
