<?php

namespace App\Factory;

use App\Entity\Card;

class CardFactory
{
    public function createHandFromArray(array $hand): array
    {
        $arrayObjects = [];

        foreach ($hand as $card) {
            $arrayObjects[] = $this->createCard($card['color'], $card['value']);
        }

        return $arrayObjects;
    }

    public function createCard(string $color, string $value): Card
    {
        return new Card($color, $value);
    }
}
