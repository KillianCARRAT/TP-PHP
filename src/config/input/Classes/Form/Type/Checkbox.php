<?php
namespace src\config\input\Classes\Form\Type;

class Checkbox extends Input{
    protected string $type="checkbox";

    public function render()
    {
        return sprintf(
            '<input type="%s" %s value="%s" name="form[%s]" id="%s" %s/>',
            $this->getType(),
            $this->isRequired() ? 'required="required"' : '',
            $this->getValue(),
            $this->getName(),
            $this->getId(),
            $this->getValue()
        );
    }
}
?>