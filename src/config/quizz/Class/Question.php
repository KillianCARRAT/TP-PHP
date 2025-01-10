<?php

namespace src\config\quizz\Class;

class Question
{
    public string $type;
    public string $question;
    public array $choices;
    public string $answer;

    public function __construct($type,$question, $answer){
        $this->type = $type;
        $this->question = $question;
        $this->choices = array();
        $this->answer = $answer;
    }

    public function addChoice($choice): void {
        array_push($this->choices, $choice);
    }

    public function render(){
        echo "<div class='question'>";
        echo $this->question;
        foreach($this->choices as $choice){
            echo $choice;
            //echo $choice->render();
        }
        echo "</div>";
    }
}