<?php
namespace src\config\input\Classes\Form\Type;
class Textarea extends Input{
    public function render(){
        return sprintf(
            '<textarea %s name="form[%s]" id="%s">%s</textarea>',
            $this->isRequired() ? 'required="required"' : '',
            $this->getName(),
            $this->getId(),
            $this->getValue()
        );
    }
}
?>