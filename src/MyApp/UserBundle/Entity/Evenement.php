<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_evenement", type="string", length=255, nullable=false)
     */
    private $libelleEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_evenement", type="date", nullable=false)
     */
    private $dateDebutEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_evenement", type="date", nullable=false)
     */
    private $dateFinEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_evenement", type="string", length=255, nullable=false)
     */
    private $typeEvenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_evenement", type="integer", nullable=false)
     */
    private $capaciteEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_evenement", type="string", length=255, nullable=false)
     */
    private $adresseEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;


}

