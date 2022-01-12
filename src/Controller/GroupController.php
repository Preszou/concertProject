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
}
