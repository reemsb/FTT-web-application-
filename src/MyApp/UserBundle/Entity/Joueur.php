<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", indexes={@ORM\Index(name="club_id_club", columns={"club_id_club"})})
 * @ORM\Entity
 */
class Joueur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_joueur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date", nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="taille", type="float", precision=10, scale=0, nullable=false)
     */
    private $taille;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", precision=10, scale=0, nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telephone", type="string", length=100, nullable=false)
     */
    private $numeroTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="blessure", type="string", length=100, nullable=false)
     */
    private $blessure;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=100, nullable=false)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=8, nullable=true)
     */
    private $cin;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_licence", type="integer", nullable=false)
     */
    private $numeroLicence;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=100, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=false)
     */
    private $sexe;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="club_id_club", referencedColumnName="id_club")
     * })
     */
    private $clubClub;

    /**
     * @return int
     */
    public function getIdJoueur()
    {
        return $this->idJoueur;
    }

    /**
     * @param int $idJoueur
     */
    public function setIdJoueur($idJoueur)
    {
        $this->idJoueur = $idJoueur;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return \DateTime
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param \DateTime $dateDeNaissance
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * @param float $taille
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;
    }

    /**
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * @param float $poids
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
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
    public function getBlessure()
    {
        return $this->blessure;
    }

    /**
     * @param string $blessure
     */
    public function setBlessure($blessure)
    {
        $this->blessure = $blessure;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param string $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return int
     */
    public function getNumeroLicence()
    {
        return $this->numeroLicence;
    }

    /**
     * @param int $numeroLicence
     */
    public function setNumeroLicence($numeroLicence)
    {
        $this->numeroLicence = $numeroLicence;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return \Club
     */
    public function getClubClub()
    {
        return $this->clubClub;
    }

    /**
     * @param \Club $clubClub
     */
    public function setClubClub($clubClub)
    {
        $this->clubClub = $clubClub;
    }

    function __toString()
    {
        return $this->nom . " " . $this->prenom;
    }


}

