<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="user_id_user", columns={"user_id_user"}), @ORM\Index(name="evenement_id_evenement", columns={"evenement_id_evenement"}), @ORM\Index(name="formation_id_formation", columns={"formation_id_formation"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_participation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipation;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evenement_id_evenement", referencedColumnName="id_evenement")
     * })
     */
    private $evenementEvenement;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formation_id_formation", referencedColumnName="id_formation")
     * })
     */
    private $formationFormation;


}

