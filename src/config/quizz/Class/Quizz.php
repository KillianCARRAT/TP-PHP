<?php

namespace src\config\quizz\Class;
include("QuestionArray.php");

use \src\config\input\Classes\Form\Type\Hidden;

class Quizz
{
    private string $uuid;
    private string $name;
    private QuestionArray $questions;

    public function __construct(string $uuid, string $name){
        $this->uuid = $uuid;
        $this->name = $name;
        $this->questions = new QuestionArray();
    }

    public function addQuestion(Question $question): void
    {
        $this->questions[] = $question;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function afficheInfo() {
        echo $this->name . "<br>";
        echo "<form method='get' action='../../../../quiz.php'>";

        $info = new Hidden($this->getUuid(), true, $this->getUuid());
        $info->render();

        echo "<button type='submit' name='uuid' value=" . $this->getUuid() . ">Faire ce quiz</button>";
        echo "</form>";
    }


    public function afficherQuiz(){
        $truc = 0;
        echo $this->name;
        echo '<form method="post" action="../../../../quiz.php">';
        foreach($this->questions as $question) {
            $question->render($truc);
            $truc++;
        }
        echo "<button type='submit' name='uuid' value=" . $this->getUuid() . ">Submit</button>";
        echo '</form>';
    }
}