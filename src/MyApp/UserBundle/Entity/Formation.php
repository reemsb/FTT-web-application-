<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_formation", type="string", length=20, nullable=false)
     */
    private $libelleFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_formation", type="date", nullable=false)
     */
    private $dateDebutFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_formation", type="date", nullable=false)
     */
    private $dateFinFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_formation", type="integer", nullable=false)
     */
    private $capaciteFormation;


}

