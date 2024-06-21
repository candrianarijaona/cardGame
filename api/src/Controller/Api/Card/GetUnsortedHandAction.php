<?php

namespace App\Controller\Api\Card;

use App\Factory\Response\JsonResponseFactory;
use App\Service\CardService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetUnsortedHandAction
{
    #[Route('/api/cards', name: 'api_card_hand', methods: ['GET'])]
    public function __invoke(CardService $cardService, JsonResponseFactory $jsonResponseFactory): Response
    {
        return $jsonResponseFactory->createResponse($cardService->generateHand());
    }
}
