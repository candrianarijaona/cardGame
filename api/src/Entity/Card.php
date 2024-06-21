<?php

namespace App\Entity;

class Card
{

    public function __construct(protected string $color, protected string $value)
    {}

    public function getColor(): string
    {
        return $this->color;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
