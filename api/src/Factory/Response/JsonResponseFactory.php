<?php

namespace App\Factory\Response;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class JsonResponseFactory
{
    public function __construct(protected SerializerInterface $serializer)
    {}

    public function createResponse(array $data): Response
    {
        return new JsonResponse(
            $this->serializer->serialize($data, 'json'),
            200,
            [],
            true
        );
    }
}
