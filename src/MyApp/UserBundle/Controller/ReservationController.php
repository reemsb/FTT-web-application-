<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 01-Dec-16
 * Time: 12:53 AM
 */

namespace MyApp\UserBundle\Controller;


use MyApp\UserBundle\Entity\Ticket;
use MyApp\UserBundle\Entity\Reservation;
use MyApp\UserBundle\Form\ReservationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
    public function listeReservationtAction()
    {
        $em=$this->getDoctrine()->getManager();
        $reservation=$em->getRepository("MyAppUserBundle:Reservation")->findAll();
        return $this->render('MyAppUserBundle:Reservation:list.html.twig',array("tickets"=>$reservation));
    }
   /* public function AjoutReservationAction(Request $Request)
       {
           $modele=new modele();
           if($Request->isMethod('POST'))
           {
               $modele->setDateRecuperationTicket($Request->get(''));
               $modele->set($Request->get(''));
               $em=$this->getDoctrine()->getManager();
               $em->persist($modele);
               $em->flush();
           }
           return $this->render('',array());



   }
}*/
    public function AjoutReservationAction(Request $Request)
    {
        $reservation=new Reservation();
        $Form = $this->createForm(ReservationForm::class, $reservation);
        $Form->handleRequest($Request);
        if ($Form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            $ticket=$reservation->getTicketTicket();
            $nbticket = $ticket->getNbrTicketDispo() -1;
            $ticket->setNbrTicketDispo($nbticket);
            $em->persist($ticket);
            $em->flush();


            return $this->redirectToRoute('AjoutReservation');
        }
        return $this->render('MyAppUserBundle:Reservation:ajout.html.twig',
            array('form' => $Form->createView()));


    }

    public function AfficherSeat(Request $request)
    {

        $Reservation = new Reservation();
        $u = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $Concours = $em->getRepository("MyAppUserBundle:Concours")->find($id_e);
        $list = $this->getDoctrine()->getEntityManager()->createQuery("SELECT m FROM MyAppUserBundle:Postulation m where m.concoursConcours=:id and m.userUser=:user ")->setParameters(array('id' => $id_e, 'user' => $u));
        $a = $postulation->getResult();
        if (count($a) == 0) {
            $Concours->setCapaciteConcours($Concours->getCapaciteConcours() - 1);
            $em->persist($Concours);
            $em->flush();
            $Postulation = new Postulation();
            $Postulation->setConcoursConcours($Concours);
            $Postulation->setUserUser($this->getUser());
            $Postulation->setDatePostulation(new \DateTime('now'));
            $em->persist($Postulation);
            $em->flush();
        }
        else{  return $this->render('MyAppUserBundle:Postulation:condition.html.twig');}

        return $this->redirectToRoute('my_app_user_list1_concours');



    }

}