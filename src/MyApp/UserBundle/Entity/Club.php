<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
 */
class Club
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_club", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClub;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_club", type="string", length=20, nullable=false)
     */
    private $libelleClub;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_club", type="string", length=20, nullable=false)
     */
    private $adresseClub;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_club", type="string", length=20, nullable=false)
     */
    private $villeClub;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telephone", type="string", length=20, nullable=false)
     */
    private $numeroTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_fax", type="string", length=20, nullable=false)
     */
    private $numeroFax;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_terrain", type="integer", nullable=false)
     */
    private $nbrTerrain;

    /**
     * @var float
     *
     * @ORM\Column(name="budget_club", type="float", precision=10, scale=0, nullable=false)
     */
    private $budgetClub;

    /**
     * @return int
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @param int $idClub
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;
    }

    /**
     * @return string
     */
    public function getLibelleClub()
    {
        return $this->libelleClub;
    }

    /**
     * @param string $libelleClub
     */
    public function setLibelleClub($libelleClub)
    {
        $this->libelleClub = $libelleClub;
    }

    /**
     * @return string
     */
    public function getAdresseClub()
    {
        return $this->adresseClub;
    }

    /**
     * @param string $adresseClub
     */
    public function setAdresseClub($adresseClub)
    {
        $this->adresseClub = $adresseClub;
    }

    /**
     * @return string
     */
    public function getVilleClub()
    {
        return $this->villeClub;
    }

    /**
     * @param string $villeClub
     */
    public function setVilleClub($villeClub)
    {
        $this->villeClub = $villeClub;
    }

    /**
     * @return string
     */
    public function getNumeroTelephone()
    {
        return $this->numeroTelephone;
    }

    /**
     * @param string $numeroTelephone
     */
    public function setNumeroTelephone($numeroTelephone)
    {
        $this->numeroTelephone = $numeroTelephone;
    }

    /**
     * @return string
     */
    public function getNumeroFax()
    {
        return $this->numeroFax;
    }

    /**
     * @param string $numeroFax
     */
    public function setNumeroFax($numeroFax)
    {
        $this->numeroFax = $numeroFax;
    }

    /**
     * @return int
     */
    public function getNbrTerrain()
    {
        return $this->nbrTerrain;
    }

    /**
     * @param int $nbrTerrain
     */
    public function setNbrTerrain($nbrTerrain)
    {
        $this->nbrTerrain = $nbrTerrain;
    }

    /**
     * @return float
     */
    public function getBudgetClub()
    {
        return $this->budgetClub;
    }

    /**
     * @param float $budgetClub
     */
    public function setBudgetClub($budgetClub)
    {
        $this->budgetClub = $budgetClub;
    }


}

