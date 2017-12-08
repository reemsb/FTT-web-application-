<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 29-Nov-16
 * Time: 11:13 PM
 */

namespace MyApp\UserBundle\Controller;


use MyApp\UserBundle\Entity\Ticket;
use MyApp\UserBundle\Form\TicketForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TicketController extends Controller
{
    public function listeTicketAction()
    {
        $em=$this->getDoctrine()->getManager();
        $ticket=$em->getRepository("MyAppUserBundle:Ticket")->findAll();
        return $this->render('MyAppUserBundle:Ticket:list.html.twig',array("tickets"=>$ticket));
    }
    public function AjoutTicketAction(Request $request)
    {$Ticket = new Ticket();
        $Form=$this->createForm(TicketForm::class,$Ticket);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($Ticket);
            $em->flush();
            return $this->redirect($this->generateUrl('Ticketbase'));
        }
        return $this->render('MyAppUserBundle:Ticket:ajout.html.twig',
            array('form'=>$Form->createView()));
    }
    public function DeleteTicketAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $ticket=$em->getRepository("MyAppUserBundle:Ticket")->find($id);
        $em->remove($ticket);
        $em->flush();
        return $this->redirectToRoute('Ticketbase');
    }
    public function UpdateTicketAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $ticket=$em->getRepository("MyAppUserBundle:Ticket")->find($id);
        $Form=$this->createForm(TicketForm::class,$ticket);
        $Form->handleRequest($request);
        if($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ticket);
            $em->flush();
            return $this->redirect($this->generateUrl('Ticketbase'));
        }
        return $this->render('MyAppUserBundle:Ticket:update.html.twig',array('form'=>$Form->createView()));
    }
}