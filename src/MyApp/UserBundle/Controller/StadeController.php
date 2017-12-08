<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 01-Dec-16
 * Time: 3:10 PM
 */

namespace MyApp\UserBundle\Controller;


use MyApp\UserBundle\Entity\Stade;
use MyApp\UserBundle\Form\StadeForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StadeController extends Controller
{
    public function listeStadeAction()
    {
        $em=$this->getDoctrine()->getManager();
        $stade=$em->getRepository("MyAppUserBundle:Stade")->findAll();
        return $this->render('MyAppUserBundle:Stade:list.html.twig',array("stades"=>$stade));
    }
    public function AjoutStadeAction(Request $request)
    {$Stade = new Stade();
        $Form=$this->createForm(StadeForm::class,$Stade);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Stade);
            $em->flush();
            return $this->redirect($this->generateUrl('Stadebase'));
        }
        return $this->render('MyAppUserBundle:Stade:ajout.html.twig',
            array('form'=>$Form->createView()));
    }
    public function DeleteStadeAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $stade=$em->getRepository("MyAppUserBundle:Stade")->find($id);
        $em->remove($stade);
        $em->flush();
        return $this->redirectToRoute('Stadebase');
    }
    public function UpdateStadeAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $stade=$em->getRepository("MyAppUserBundle:Stade")->find($id);
        $Form=$this->createForm(StadeForm::class,$stade);
        $Form->handleRequest($request);
        if($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stade);
            $em->flush();
            return $this->redirect($this->generateUrl('Stadebase'));
        }
        return $this->render('MyAppUserBundle:Stade:update.html.twig',array('form'=>$Form->createView()));
    }
}