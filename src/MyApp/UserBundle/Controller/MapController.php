<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 29-Nov-16
 * Time: 11:58 AM
 */

namespace MyApp\UserBundle\Controller;


class MapController extends Controller
{
    public function indexAction()
    {
        $Latitudes='36.8375';
        $Longitudes='10.1927';
        return $this->render('MyAppUserBundle:index.html.twig', array('latitudes'=>$Latitudes,'longitudes'=>$Longitudes ));
    }
}