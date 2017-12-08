<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArbitreController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:Arbitre:Arbitre.html.twig');
    }
}
