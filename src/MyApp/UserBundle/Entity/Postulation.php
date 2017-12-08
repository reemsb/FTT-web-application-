<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postulation
 *
 * @ORM\Table(name="postulation", indexes={@ORM\Index(name="concours_id_concours", columns={"concours_id_concours"}), @ORM\Index(name="user_id_user", columns={"user_id_user"})})
 * @ORM\Entity
 */
class Postulation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_postulation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPostulation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_postulation", type="datetime", nullable=false)
     */
    private $datePostulation = 'CURRENT_TIMESTAMP';

    /**
     * @var \Concours
     *
     * @ORM\ManyToOne(targetEntity="Concours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="concours_id_concours", referencedColumnName="id_concours")
     * })
     */
    private $concoursConcours;

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

