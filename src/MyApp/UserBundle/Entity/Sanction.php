<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sanction
 *
 * @ORM\Table(name="sanction", indexes={@ORM\Index(name="joueur_id_joueur", columns={"joueur_id_joueur"}), @ORM\Index(name="user_id_user", columns={"user_id_user"})})
 * @ORM\Entity
 */
class Sanction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sanction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSanction;

    /**
     * @var string
     *
     * @ORM\Column(name="type_sanction", type="string", length=255, nullable=false)
     */
    private $typeSanction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joueur_id_joueur", referencedColumnName="id_joueur")
     * })
     */
    private $joueurJoueur;

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

