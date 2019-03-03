<?php

namespace App\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/advert/types")
 */
class AdvertTypeController extends AbstractController
{
    /**
     * @Route("/", name="advert.type.index")
     */
    public function index()
    {
        return $this->render('advert_type/index.html.twig', [
            'controller_name' => 'AdvertTypeController',
        ]);
    }

    /**
     * @Route("/", name="advert.type.show")
     */
    public function show()
    {
        return $this->render('advert_type/index.html.twig', [
            'controller_name' => 'AdvertTypeController',
        ]);
    }

    /**
     * @Route("/", name="advert.type.new")
     */
    public function new()
    {
        return $this->render('advert_type/index.html.twig', [
            'controller_name' => 'AdvertTypeController',
        ]);
    }

    /**
     * @Route("/", name="advert.type.edit")
     */
    public function edit()
    {
        return $this->render('advert_type/index.html.twig', [
            'controller_name' => 'AdvertTypeController',
        ]);
    }

}
