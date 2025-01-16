<?php
use src\config\quizz\Class\Quizz;
require_once "src/config/questions.php";


use function src\config\getQuizzes;

$uuidQuiz = $_GET["test"];

$quizzes = getQuizzes();

foreach ($quizzes as $quiz) {
    if ($quiz->getUuid() == $uuidQuiz) {
        $quiz->afficherQuiz();
    }
}

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