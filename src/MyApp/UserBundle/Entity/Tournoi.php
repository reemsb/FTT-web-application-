<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournoi
 *
 * @ORM\Table(name="tournoi")
 * @ORM\Entity
 */
class Tournoi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tournoi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTournoi;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_tournoi", type="string", length=50, nullable=true)
     */
    private $nomTournoi;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_match", type="integer", nullable=true)
     */
    private $nbrMatch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_tournoi", type="date", nullable=false)
     */
    private $dateDebutTournoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_tournoi", type="date", nullable=false)
     */
    private $dateFinTournoi;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement_tournoi", type="string", length=100, nullable=false)
     */
    private $emplacementTournoi;


}

