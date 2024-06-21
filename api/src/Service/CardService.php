<?php

namespace App\Service;

use App\Factory\CardFactory;

class CardService
{
    protected array $colors;

    protected array $values;

    public function __construct(protected CardFactory $cardFactory, protected array $cardConfig)
    {
        $this->colors = $cardConfig['colors'];
        $this->values = $cardConfig['values'];
    }

    public function generateHand(int $count = 10): array
    {
        $hand = [];

        while (count($hand) < $count) {
            $color = $this->colors[array_rand($this->colors)];
            $value = $this->values[array_rand($this->values)];
            $hand[] = $this->cardFactory->createCard($color, $value);
        }

        return $hand;
    }

    public function sortHand(array $hand): array
    {
        if (empty($hand)) {
            return [];
        }

        $hand = $this->cardFactory->createHandFromArray($hand);

        usort($hand, function ($a, $b) {
            $colorComparison = array_search($a->getColor(), $this->colors) <=> array_search($b->getColor(), $this->colors);
            if ($colorComparison !== 0) {
                return $colorComparison;
            }

            return array_search($a->getValue(), $this->values) <=> array_search($b->getValue(), $this->values);
        });

        return $hand;
    }
}
