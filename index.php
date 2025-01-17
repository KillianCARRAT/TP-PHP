<?php
require_once __DIR__ . '/src/config/autoload.php';
require_once "src/config/questions.php";

session_start();

use function src\config\getQuizzes;

use Src\Config\Autoloader;


Autoloader::register();

$quizzes = getQuizzes();

foreach ($quizzes as $quiz) {
    $quiz->afficheInfo();
}
