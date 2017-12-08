<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="user_id_user", columns={"user_id_user"}), @ORM\Index(name="user_id_user_2", columns={"user_id_user"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet_reclamation", type="string", length=255, nullable=false)
     */
    private $sujetReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_reclamation", type="string", length=255, nullable=false)
     */
    private $texteReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_reclamation", type="string", length=255, nullable=false)
     */
    private $etatReclamation;

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

