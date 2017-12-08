<?php

namespace MyApp\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResponsableController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppUserBundle:Responsable:Responsable.html.twig');
    }
}
