<?php
use src\config\quizz\Class\Quizz;
require_once "src/config/questions.php";


use function src\config\getQuizzes;

$uuidQuiz = $_GET["uuid"];

$quizzes = getQuizzes();

foreach ($quizzes as $quiz) {
    if ($quiz->getUuid() == $uuidQuiz) {
        $quiz->afficherQuiz();
    }
}

# Quand l'utilisateur clique sur l'un des deux bouton on reste sur cette page
//switch ($_GET['action']){
//    case "submit":
//        require_once "a";
//        break;
//    case "reponse":
//        require_once "b";
//        break;
//    default :
//        require_once "src/views/uneVue.php";
//        break;
//}