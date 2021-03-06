<?php

namespace App\Controller;

use App\Entity\Concert;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConcertController
 * @package App\Controller
 */
class ConcertController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Concert::class);
        return $this->render('concert/index.html.twig', [
            'controller_name' => 'ConcertController',
            'concert_list' => $repository->findAll()
        ]);
    }


    /**
     * Affiche une liste de concerts
     *
     * @param string $name
     * @return Response
     *
     * @Route("/concert/{name}", name="list")
     */
    public function list(string $name): Response
    {
        return $this->render('concert/list.html.twig', [
            'name' => $name,
            'concerts' => ['Dionysos', 'Chapelier Fou']
            ]
        );
    }
}
