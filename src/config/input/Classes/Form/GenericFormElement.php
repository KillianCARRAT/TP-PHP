<?php

namespace src\config\input\Classes\Form;

abstract class GenericFormElement implements InputRenderInterface
{
    protected string $type;
    protected mixed $value;
    protected bool $required;

    public function __construct(protected readonly string $name, $required = false, $value=''){
        $this->required = $required;
        $this->value = $value;
    }

    public function isRequired():bool{
        return $this->required;
    }

    public function getValue(): string{
        return $this->value;
    }

    public function getType(): string{
        return $this->type;
    }

    public function getId(): string{
        return sprintf('form_%s', $this->name);
    }

    public function getName(): string{
        return $this->name;
    }

    public function __tostring():string{
        return $this->render();
    }
}