<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport", indexes={@ORM\Index(name="joueur_id_joueur", columns={"joueur_id_joueur"}), @ORM\Index(name="user_id_user", columns={"user_id_user"})})
 * @ORM\Entity
 */
class Rapport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rapport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRapport;

    /**
     * @var string
     *
     * @ORM\Column(name="type_test", type="string", length=255, nullable=false)
     */
    private $typeTest;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_rapport", type="string", length=255, nullable=false)
     */
    private $commentaireRapport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_test", type="date", nullable=false)
     */
    private $dateTest;

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

