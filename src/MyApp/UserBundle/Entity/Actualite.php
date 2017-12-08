<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualite
 *
 * @ORM\Table(name="actualite")
 * @ORM\Entity
 */
class Actualite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_actualite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_actualite", type="date", nullable=false)
     */
    private $dateActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_actualite", type="string", length=100, nullable=false)
     */
    private $titreActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="image_actualite", type="blob", length=65535, nullable=false)
     */
    private $imageActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_actualite", type="string", length=1000, nullable=false)
     */
    private $texteActualite;


}

