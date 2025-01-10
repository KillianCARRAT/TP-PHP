<?php

use function src\config\getQuestions;

require_once "src/config/questions.php";
require_once __DIR__ . 'src/config/autoload.php';

Autoloader::register();
$data = getQuestions();