<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MedecinController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:Medecin:Medecin.html.twig');
    }
}
