<?php

use function src\config\getQuizzes;

require_once "src/config/questions.php";

$data = getQuizzes();

print_r($data);