<?php
require_once "src/config/questions.php";




use function src\config\getQuizzes;

$uuidQuiz = $_GET["uuid"];

$quizzes = getQuizzes();

foreach ($quizzes as $quiz) {
    if ($quiz->getUuid() == $uuidQuiz) {
        $quiz->afficherQuiz();
    }
}