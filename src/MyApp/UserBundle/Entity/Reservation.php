<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="ticket_id_ticket", columns={"ticket_id_ticket"}), @ORM\Index(name="ticket_id_ticket_2", columns={"ticket_id_ticket"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReservation;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_recuperation_ticket", type="date", nullable=false)
     */
    private $dateRecuperationTicket;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_id_ticket", referencedColumnName="id_ticket", nullable=false)
     * })
     */
    private $ticketTicket;

    /**
     * @var string
     *
     * @ORM\Column(name="block", type="string", length=20, nullable=false)
     */
    private $block;

    /**
     * @var string
     *
     * @ORM\Column(name="seat", type="string", length=20, nullable=false)
     */
    private $seat;

        /**
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @param int $idReservation
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;
    }

    /**
     * @return \Date
     */
    public function getDateRecuperationTicket()
    {
        return $this->dateRecuperationTicket;
    }

    /**
     * @param \Date $dateRecuperationTicket
     */
    public function setDateRecuperationTicket($dateRecuperationTicket)
    {
        $this->dateRecuperationTicket = $dateRecuperationTicket;
    }

    /**
     * @return \Ticket
     */
    public function getTicketTicket()
    {
        return $this->ticketTicket;
    }

    /**
     * @param \Ticket $ticketTicket
     */
    public function setTicketTicket($ticketTicket)
    {
        $this->ticketTicket = $ticketTicket;
    }

    /**
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @param string $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * @param string $seat
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }


}

