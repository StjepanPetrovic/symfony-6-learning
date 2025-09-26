<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: PB and Jams');
    }
}
