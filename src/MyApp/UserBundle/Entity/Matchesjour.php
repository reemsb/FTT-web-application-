<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matchesjour
 *
 * @ORM\Table(name="matchesjour", uniqueConstraints={@ORM\UniqueConstraint(name="date", columns={"date"})})
 * @ORM\Entity
 */
class Matchesjour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match1", type="integer", nullable=true)
     */
    private $idMatch1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match2", type="integer", nullable=true)
     */
    private $idMatch2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match3", type="integer", nullable=true)
     */
    private $idMatch3;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match4", type="integer", nullable=true)
     */
    private $idMatch4;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match5", type="integer", nullable=true)
     */
    private $idMatch5;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match6", type="integer", nullable=true)
     */
    private $idMatch6;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match7", type="integer", nullable=true)
     */
    private $idMatch7;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match8", type="integer", nullable=true)
     */
    private $idMatch8;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match9", type="integer", nullable=true)
     */
    private $idMatch9;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match10", type="integer", nullable=true)
     */
    private $idMatch10;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match11", type="integer", nullable=true)
     */
    private $idMatch11;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_match12", type="integer", nullable=true)
     */
    private $idMatch12;


}

