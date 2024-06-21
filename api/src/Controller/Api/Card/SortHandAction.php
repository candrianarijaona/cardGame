<?php

namespace App\Controller\Api\Card;

use App\Factory\Response\JsonResponseFactory;
use App\Service\CardService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortHandAction
{
    #[Route('/api/cards/sort', name: 'api_card_hand_sort', methods: ['POST'])]
    public function __invoke(
        Request             $request,
        CardService         $cardService,
        JsonResponseFactory $jsonResponseFactory
    ): Response
    {
        $data = json_decode($request->getContent(), true);
        $cards = $data['cards'] ?? [];

        return $jsonResponseFactory->createResponse($cardService->sortHand($cards));
    }
}
