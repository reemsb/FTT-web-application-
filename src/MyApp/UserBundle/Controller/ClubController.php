<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 25-Nov-16
 * Time: 12:06 AM
 */

namespace MyApp\UserBundle\Controller;


use MyApp\UserBundle\Entity\Club;
use Symfony\Bundle\FrameworkBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use MyApp\UserBundle\Form\ClubForm;



class ClubController extends Controller
{
    public function listeClubAction()
{
    $em=$this->getDoctrine()->getManager();
    $club=$em->getRepository("MyAppUserBundle:Club")->findAll();
    return $this->render('MyAppUserBundle:Club:list.html.twig',array("clubs"=>$club));
}
    public function AjoutClubAction(Request $request)
    {$Club = new Club();
        $Form=$this->createForm(ClubForm::class,$Club);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Club);
            $em->flush();
            return $this->redirect($this->generateUrl('Clubbase'));
        }
        return $this->render('MyAppUserBundle:Club:ajout.html.twig',
            array('form'=>$Form->createView()));
    }
    public function DeleteClubAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $club=$em->getRepository("MyAppUserBundle:Club")->find($id);
        $em->remove($club);
        $em->flush();
        return $this->redirectToRoute('Clubbase');
    }
    public function UpdateClubAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $club=$em->getRepository("MyAppUserBundle:Club")->find($id);
        $Form=$this->createForm(ClubForm::class,$club);
        $Form->handleRequest($request);
        if($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();
            return $this->redirect($this->generateUrl('Clubbase'));
        }
        return $this->render('MyAppUserBundle:Club:update.html.twig',array('form'=>$Form->createView()));
    }
}