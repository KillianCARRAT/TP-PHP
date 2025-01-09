<?php
namespace src\config;
function getQuestions(){
    $root = $_SERVER['DOCUMENT_ROOT'] . "/public/assets/JSON/questions.json";
    $json = file_get_contents($root);
    return json_decode($json, true);
}
