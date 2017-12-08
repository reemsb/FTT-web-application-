<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concours
 *
 * @ORM\Table(name="concours")
 * @ORM\Entity
 */
class Concours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_concours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcours;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_concours", type="string", length=100, nullable=false)
     */
    private $libelleConcours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_concours", type="date", nullable=false)
     */
    private $dateDebutConcours;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_concours", type="date", nullable=false)
     */
    private $dateFinConcours;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_concours", type="string", length=100, nullable=false)
     */
    private $lieuConcours;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_concours", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraisConcours;

    /**
     * @var string
     *
     * @ORM\Column(name="type_concours", type="string", length=100, nullable=false)
     */
    private $typeConcours;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_concours", type="integer", nullable=false)
     */
    private $capaciteConcours;


}

