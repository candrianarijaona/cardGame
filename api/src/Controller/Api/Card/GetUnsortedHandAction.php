<?php

namespace App\Controller\Api\Card;

use Symfony\Component\Routing\Annotation\Route;

class GetUnsortedHandAction
{
    #[Route('/api/card', name: 'api_card_hand', methods: ['GET'])]
    public function __invoke()
    {
        $hand = [
            '2H', '3D', '5S', '9C', 'KD'
        ];

        return $hand;
    }
}
