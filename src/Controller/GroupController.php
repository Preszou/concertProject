<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BandRepository;

class GroupController extends AbstractController
{


    /**
     * Affiche une liste de concerts
     *
     *
     * @Route("/band", name="band")
     */
    public function list(BandRepository $br): Response
    {
        return $this->render('concert/band.html.twig', [
            'band' =>$br->findAll()
            ]
        );
    }


    /**
     * Affiche une liste de concerts
     *
     * @param string $name
     * @return Response
     *
     * @Route("/band/{id}", name="list")
     */
    public function liste(BandRepository $br, int $id): Response
    {
        return $this->render('concert/band.show.html.twig', [
            'band' =>$br->find($id),

            ]
        );
    }
}
