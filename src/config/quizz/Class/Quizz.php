<?php

namespace src\config\quizz\Class;
include("QuestionArray.php");

class Quizz
{
    private string $name;
    private QuestionArray $questions;

    public function __construct(string $name){
        $this->name = $name;
        $this->questions = new QuestionArray();
    }

    public function addQuestion(Question $question): void
    {
        $this->questions[] = $question;
    }

    public function afficher(){
        echo '<form action="" method="post">';
        foreach($this->questions as $question){
            $question->render();
            //echo '<input type='.$question.getType().' value='.$question.getQuestion().'>';
        }
        echo '</form>';
    }
}