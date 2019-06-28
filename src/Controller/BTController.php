<?php

namespace App\Controller;

use App\Entity\Commanders;
use App\Service\BTService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BTController extends AbstractController
{
    /**
     * @Route("/", name="test")
     */
    public function index(BTService $zeuby)
    {

        $sphere = $this->getDoctrine()
            ->getRepository(Commanders::class)
            ->findBy(['faction' => 'Sphère Introvertie']);

        /** @var Commanders $sphere */
        $sphere[0]->setName('Victor Glaviot');
        $this->getDoctrine()->getManager()->flush();

        return $this->render('bt/index.html.twig', [
            'commanders' => $sphere,
        ]);
    }

    /*
     * @Route("/zizi", name="zizi")
     */
    public function zeuby(BTService $bTService)
    {
        $bTService->byzeu();
        return new Response(['zeuby']);
    }
}
