<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title : LEZGOOO');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        if($slug){
            //La fonction u() retourne un objet sur lequel on peut utiliser des operations dessus (string)
            $title = 'Genre : '.u(str_replace('-', ' ', $slug))->title(true);
        } else {
            $title = 'All genres.';
        }

        return new Response($title);
    }
}