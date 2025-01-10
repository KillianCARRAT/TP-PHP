<?php

namespace src\config\quizz\Class;

class Quizz
{
    private QuestionArray $questions;

    public function __construct(){
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