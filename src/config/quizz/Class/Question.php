<?php

namespace src\config\quizz\Class;

use \src\config\input\Classes\Form\Type\Checkbox;

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

    public function render($uuid){
        echo $this->question;
        echo "<fieldset id='". $uuid."'>";
        foreach($this->choices as $choice){
            echo "<br>";
            echo "<label>".$choice."</label>";
            echo "<input type='" . $this->type . "' name='choice" . $uuid . "' value='" . $choice . "' ";
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                echo "checked";
            }
            echo ">";
        }
        echo "</fieldset>";
    }
}