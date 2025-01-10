<?php
namespace src\config;

include('quizz/Class/Question.php');
include('quizz/Class/Quizz.php');

use src\config\quizz\Class\Question;
use src\config\quizz\Class\Quizz;

function getQuizzes(){
//    $root = $_SERVER['DOCUMENT_ROOT'] . "./public/assets/JSON/questions.json";

// Charger le contenu du fichier JSON
    $json = file_get_contents("./public/assets/JSON/questions.json");
    $quizzesData = json_decode($json, true);

    $lesQuizzes = [];

// Parcourir chaque quizz
    foreach ($quizzesData as $quizName => $questions) {
        $newQuiz = new Quizz($quizName);

        foreach ($questions as $questionData) {
            $newQuestion = new Question(
                $questionData["type"],
                $questionData["question"],
                $questionData["answer"]
            );

            foreach ($questionData["choices"] as $choice) {
                $newQuestion->addChoice($choice);
            }

            $newQuiz->addQuestion($newQuestion);
        }

        $lesQuizzes[] = $newQuiz;
    }

    return $lesQuizzes;
}