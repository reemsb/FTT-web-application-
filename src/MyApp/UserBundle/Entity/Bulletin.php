<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bulletin
 *
 * @ORM\Table(name="bulletin")
 * @ORM\Entity
 */
class Bulletin
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
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m1", type="string", length=50, nullable=false)
     */
    private $nom1M1;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m1", type="string", length=50, nullable=false)
     */
    private $nom2M1;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m1", type="integer", nullable=false)
     */
    private $choixM1;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m2", type="string", length=50, nullable=false)
     */
    private $nom1M2;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m2", type="string", length=50, nullable=false)
     */
    private $nom2M2;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m2", type="integer", nullable=false)
     */
    private $choixM2;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m3", type="string", length=50, nullable=false)
     */
    private $nom1M3;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m3", type="string", length=50, nullable=false)
     */
    private $nom2M3;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m3", type="integer", nullable=false)
     */
    private $choixM3;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m4", type="string", length=50, nullable=false)
     */
    private $nom1M4;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m4", type="string", length=50, nullable=false)
     */
    private $nom2M4;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m4", type="integer", nullable=false)
     */
    private $choixM4;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m5", type="string", length=50, nullable=false)
     */
    private $nom1M5;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m5", type="string", length=50, nullable=false)
     */
    private $nom2M5;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m5", type="integer", nullable=false)
     */
    private $choixM5;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m6", type="string", length=50, nullable=false)
     */
    private $nom1M6;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m6", type="string", length=50, nullable=false)
     */
    private $nom2M6;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m6", type="integer", nullable=false)
     */
    private $choixM6;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m7", type="string", length=50, nullable=false)
     */
    private $nom1M7;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m7", type="string", length=50, nullable=false)
     */
    private $nom2M7;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m7", type="integer", nullable=false)
     */
    private $choixM7;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m8", type="string", length=50, nullable=false)
     */
    private $nom1M8;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m8", type="string", length=50, nullable=false)
     */
    private $nom2M8;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m8", type="integer", nullable=false)
     */
    private $choixM8;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m9", type="string", length=50, nullable=false)
     */
    private $nom1M9;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m9", type="string", length=50, nullable=false)
     */
    private $nom2M9;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m9", type="integer", nullable=false)
     */
    private $choixM9;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m10", type="string", length=50, nullable=false)
     */
    private $nom1M10;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m10", type="string", length=50, nullable=false)
     */
    private $nom2M10;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m10", type="integer", nullable=false)
     */
    private $choixM10;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m11", type="string", length=50, nullable=false)
     */
    private $nom1M11;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m11", type="string", length=50, nullable=false)
     */
    private $nom2M11;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m11", type="integer", nullable=false)
     */
    private $choixM11;

    /**
     * @var string
     *
     * @ORM\Column(name="nom1_m12", type="string", length=50, nullable=false)
     */
    private $nom1M12;

    /**
     * @var string
     *
     * @ORM\Column(name="nom2_m12", type="string", length=50, nullable=false)
     */
    private $nom2M12;

    /**
     * @var integer
     *
     * @ORM\Column(name="choix_m12", type="integer", nullable=false)
     */
    private $choixM12;


}

