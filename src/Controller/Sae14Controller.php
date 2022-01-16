<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Sae14Controller extends AbstractController
{
    /**
     * @Route("/sae14", name="sae14")
     */
    public function index(): Response
    {
        return $this->render('sae14/index.html.twig', [
            'controller_name' => 'Sae14Controller',
        ]);
    }
    
    /**
     * @Route("/sae14/me", name="sae14/me")
     */
    public function me()
    {
        return $this->render('sae14/me.html.twig');
    }
    
    /**
     * @Route("/sae14/portfolio", name="sae14/portfolio")
     */
    public function portfolio()
    {
        return $this->render('sae14/portfolio.html.twig');
    }
    
    /**
     * @Route("/sae14/cv", name="sae14/cv")
     */
    public function cv()
    {
        return $this->render('sae14/cv.html.twig');
    }
    
    /**
     * @Route("/sae14/contact", name="sae14/contact")
     */
    public function contact()
    {
        return $this->render('sae14/contact.html.twig');
    }
    
    /**
     * @Route("/sae14/modif", name="sae14/modif")
     */
    public function modif()
    {
        return $this->render('sae14/modif.html.twig');
    }
    
}
