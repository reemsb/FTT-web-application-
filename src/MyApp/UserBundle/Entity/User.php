<?php

namespace MyApp\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**  * @ORM\Entity
 * * @ORM\Table(name="utilisateur")
 */ class User extends BaseUser {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $nom;

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $prenom;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $cin;
    /**
     * @ORM\Column(name="date_naissance",type="date")
     */
    private $date_naissance;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     */
    private $nationalite;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     */
    private $grade;
    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $salaire;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     */
    private $type;
    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     *
     */
    private $numero_telephone;
    /**
     * @ORM\Column(type="string",length=255)
     *
     */
    private $sexe;
    /**
     * @ORM\Column(type="float", nullable=true)
     *
     */
    private $solde;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    /**
     * @param mixed $date_naissance
     */
    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    /**
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }



    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getNumeroTelephone()
    {
        return $this->numero_telephone;
    }

    /**
     * @param mixed $numero_telephone
     */
    public function setNumeroTelephone($numero_telephone)
    {
        $this->numero_telephone = $numero_telephone;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }


}