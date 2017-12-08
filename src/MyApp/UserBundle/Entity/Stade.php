<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stade
 *
 * @ORM\Table(name="stade")
 * @ORM\Entity
 */
class Stade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_stade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStade;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_stade", type="string", length=100, nullable=false)
     */
    private $libelleStade;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_stade", type="string", length=100, nullable=false)
     */
    private $adresseStade;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_stade", type="string", length=100, nullable=false)
     */
    private $villeStade;

    /**
     * @var string
     *
     * @ORM\Column(name="type_stade", type="string", length=100, nullable=false)
     */
    private $typeStade;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_stade", type="integer", nullable=false)
     */
    private $capaciteStade;

    /**
     * @return int
     */
    public function getIdStade()
    {
        return $this->idStade;
    }

    /**
     * @param int $idStade
     */
    public function setIdStade($idStade)
    {
        $this->idStade = $idStade;
    }

    /**
     * @return string
     */
    public function getLibelleStade()
    {
        return $this->libelleStade;
    }

    /**
     * @param string $libelleStade
     */
    public function setLibelleStade($libelleStade)
    {
        $this->libelleStade = $libelleStade;
    }

    /**
     * @return string
     */
    public function getAdresseStade()
    {
        return $this->adresseStade;
    }

    /**
     * @param string $adresseStade
     */
    public function setAdresseStade($adresseStade)
    {
        $this->adresseStade = $adresseStade;
    }

    /**
     * @return string
     */
    public function getVilleStade()
    {
        return $this->villeStade;
    }

    /**
     * @param string $villeStade
     */
    public function setVilleStade($villeStade)
    {
        $this->villeStade = $villeStade;
    }

    /**
     * @return string
     */
    public function getTypeStade()
    {
        return $this->typeStade;
    }

    /**
     * @param string $typeStade
     */
    public function setTypeStade($typeStade)
    {
        $this->typeStade = $typeStade;
    }

    /**
     * @return int
     */
    public function getCapaciteStade()
    {
        return $this->capaciteStade;
    }

    /**
     * @param int $capaciteStade
     */
    public function setCapaciteStade($capaciteStade)
    {
        $this->capaciteStade = $capaciteStade;
    }


}

