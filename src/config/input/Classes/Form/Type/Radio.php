<?php

namespace src\config\input\Classes\Form\Type;

class Radio extends Input
{
    protected string $type = "radio";

    public function render()
    {
        return sprintf(
            '<input type="%s" %s value="%s" name="form[%s]" id="%s" %s/>'.PHP_EOL.'<label for="%s">%s</label>',
            $this->getType(),
            $this->isRequired() ? 'required="required"' : '',
            $this->getValue(),
            $this->getName(),
            $this->getId(),
            $this->getValue(),
            $this->getValue(),
            $this->getValue()
        );
    }
}
