<?php

namespace src\config\quizz\Class;

use ArrayObject;

class QuestionArray extends \ArrayObject
{
    public function offsetSet($key, $value) {
        if ($value instanceof Question) {
            return parent::offsetSet($key, $value);
        }
        throw new \InvalidArgumentException('Value must be a Question');
    }
}