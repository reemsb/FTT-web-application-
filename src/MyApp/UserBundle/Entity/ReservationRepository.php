<?php
/**
 * Created by PhpStorm.
 * User: Rym
 * Date: 01-Dec-16
 * Time: 8:18 PM
 */

namespace MyApp\UserBundle\Entity;


use Doctrine\ORM\EntityRepository;

class ReservationRepository extends EntityRepository   {

    public function findByUserUser($id)
    {
        $query=$this->getEntityManager()->createQuery("SELECT r from MyAppUserBundle:Reservation r"
            . "JOIN " .
            "MyAppUserBundle:Ticket u WHERE r.userUser=u.id AND u.id=:userUser")
            ->setParameter("userUSer",$id);
        return $query->getResult();
    }
    public function findByCapacite()
    {
        $query=$this->getEntityManager()->createQuery("SELECT r from MyAppUserBundle: r WHERE r.nbrTicketdispo>0  ");

        return $query->getResult();
    }

    public function findList()
    {
        $query=$this->getEntityManager()->createQuery("SELECT seat from MyAppUserBundle:Reservation r")
            ->setParameter("");

        return $query->getResult();

    }

}