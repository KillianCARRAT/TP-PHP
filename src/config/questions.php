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

    $uuidQuiz = 0;

// Parcourir chaque quizz
    foreach ($quizzesData as $quizz){
        $quizName = array_key_first($quizz);
        $newQuizz = new Quizz($uuidQuiz, $quizName);
        foreach ($quizz[$quizName] as $question){
            $newQuestion = new Question($question['type'], $question['question'], $question['answer']);
            foreach ($question['choices'] as $choice){
                $newQuestion->addChoice($choice);
            }
            $newQuizz->addQuestion($newQuestion);
        }
        $lesQuizzes[] = $newQuizz;
        $uuidQuiz++;
    }

    return $lesQuizzes;
}