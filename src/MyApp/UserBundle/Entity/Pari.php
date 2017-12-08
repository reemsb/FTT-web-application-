<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pari
 *
 * @ORM\Table(name="pari", indexes={@ORM\Index(name="user_id_user", columns={"user_id_user"})})
 * @ORM\Entity
 */
class Pari
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pari", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPari;

    /**
     * @var integer
     *
     * @ORM\Column(name="montant_pari", type="integer", nullable=false)
     */
    private $montantPari;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match1", type="integer", nullable=false)
     */
    private $choixMatch1;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match2", type="integer", nullable=false)
     */
    private $choixMatch2;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match3", type="integer", nullable=false)
     */
    private $choixMatch3;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match4", type="integer", nullable=false)
     */
    private $choixMatch4;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match5", type="integer", nullable=false)
     */
    private $choixMatch5;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match6", type="integer", nullable=false)
     */
    private $choixMatch6;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match7", type="integer", nullable=false)
     */
    private $choixMatch7;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match8", type="integer", nullable=false)
     */
    private $choixMatch8;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match9", type="integer", nullable=false)
     */
    private $choixMatch9;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match10", type="integer", nullable=false)
     */
    private $choixMatch10;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match11", type="integer", nullable=false)
     */
    private $choixMatch11;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_match12", type="integer", nullable=false)
     */
    private $choixMatch12;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_pari", type="datetime", nullable=false)
     */
    private $datePari = 'CURRENT_TIMESTAMP';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;


}

