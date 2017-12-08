<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="match_id_match", columns={"match_id_match"}), @ORM\Index(name="match_id_match_2", columns={"match_id_match"}), @ORM\Index(name="stade_id_stade", columns={"stade_id_stade"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTicket;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_ticket", type="string", length=50, nullable=false)
     */
    private $libelleTicket;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ticket", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixTicket;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_ticket_dispo", type="integer", nullable=false)
     */
    private $nbrTicketDispo;

    /**
     * @var \Matches
     *
     * @ORM\ManyToOne(targetEntity="Matches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="match_id_match", referencedColumnName="id_match")
     * })
     */
    private $matchMatch;

    /**
     * @var \Stade
     *
     * @ORM\ManyToOne(targetEntity="Stade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stade_id_stade", referencedColumnName="id_stade")
     * })
     */
    private $stadeStade;

    /**
     * @return int
     */
    public function getIdTicket()
    {
        return $this->idTicket;
    }

    /**
     * @param int $idTicket
     */
    public function setIdTicket($idTicket)
    {
        $this->idTicket = $idTicket;
    }

    /**
     * @return string
     */
    public function getLibelleTicket()
    {
        return $this->libelleTicket;
    }

    /**
     * @param string $libelleTicket
     */
    public function setLibelleTicket($libelleTicket)
    {
        $this->libelleTicket = $libelleTicket;
    }

    /**
     * @return float
     */
    public function getPrixTicket()
    {
        return $this->prixTicket;
    }

    /**
     * @param float $prixTicket
     */
    public function setPrixTicket($prixTicket)
    {
        $this->prixTicket = $prixTicket;
    }


    /**
     * @return int
     */
    public function getNbrTicketDispo()
    {
        return $this->nbrTicketDispo;
    }

    /**
     * @param int $nbrTicketDispo
     */
    public function setNbrTicketDispo($nbrTicketDispo)
    {
        $this->nbrTicketDispo = $nbrTicketDispo;
    }

    /**
     * @return \Matches
     */
    public function getMatchMatch()
    {
        return $this->matchMatch;
    }

    /**
     * @param \Matches $matchMatch
     */
    public function setMatchMatch($matchMatch)
    {
        $this->matchMatch = $matchMatch;
    }

    /**
     * @return \Stade
     */
    public function getStadeStade()
    {
        return $this->stadeStade;
    }

    /**
     * @param \Stade $stadeStade
     */
    public function setStadeStade($stadeStade)
    {
        $this->stadeStade = $stadeStade;
    }

    function __toString()
    {
        return $this->libelleTicket;
    }
}

