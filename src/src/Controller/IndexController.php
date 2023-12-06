<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
    #[Route('/', 'index')]
    public function hello(): JsonResponse
    {
        return new JsonResponse("Hello world");
    }
}
