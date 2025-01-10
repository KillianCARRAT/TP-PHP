<?php
namespace src\config\input\Classes\Form\Type;
use src\config\input\Classes\Form\GenericFormElement;
abstract class Input extends GenericFormElement{
    public function render(){
        return sprintf(
            '<input type="%s" %s value="%s" name="form[%s]" id="%s"/>',
            $this->getType(),
            $this->isRequired() ?'required="required"':'',
            $this->getValue(),
            $this->getName(),
            $this->getId()
        );
    }
}
?>