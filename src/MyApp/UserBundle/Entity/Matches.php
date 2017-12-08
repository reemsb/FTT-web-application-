<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matches
 *
 * @ORM\Table(name="matches", indexes={@ORM\Index(name="user_id_user", columns={"user_id_user"}), @ORM\Index(name="joueur_id1_joueur", columns={"joueur_id1_joueur"}), @ORM\Index(name="joueur_id2_joueur", columns={"joueur_id2_joueur"}), @ORM\Index(name="tournoi_id_tournoi", columns={"tournoi_id_tournoi"})})
 * @ORM\Entity
 */
class Matches
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_match", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMatch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_match", type="date", nullable=false)
     */
    private $dateMatch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_match", type="time", nullable=true)
     */
    private $heureMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="stade_id_stade", type="integer", nullable=false)
     */
    private $stadeIdStade;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_joueur_gagnant", type="integer", nullable=true)
     */
    private $idJoueurGagnant;

    /**
     * @var integer
     *
     * @ORM\Column(name="tournoi_id_tournoi", type="integer", nullable=false)
     */
    private $tournoiIdTournoi;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_match", type="string", length=100, nullable=true)
     */
    private $dureeMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_joueur1", type="integer", nullable=true)
     */
    private $scoreJoueur1;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_joueur2", type="integer", nullable=true)
     */
    private $scoreJoueur2;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joueur_id1_joueur", referencedColumnName="id_joueur")
     * })
     */
    private $joueur1Joueur;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joueur_id2_joueur", referencedColumnName="id_joueur")
     * })
     */
    private $joueur2Joueur;

    /**
     * @return int
     */
    public function getIdMatch()
    {
        return $this->idMatch;
    }

    /**
     * @param int $idMatch
     */
    public function setIdMatch($idMatch)
    {
        $this->idMatch = $idMatch;
    }

    /**
     * @return \DateTime
     */
    public function getDateMatch()
    {
        return $this->dateMatch;
    }

    /**
     * @param \DateTime $dateMatch
     */
    public function setDateMatch($dateMatch)
    {
        $this->dateMatch = $dateMatch;
    }

    /**
     * @return \DateTime
     */
    public function getHeureMatch()
    {
        return $this->heureMatch;
    }

    /**
     * @param \DateTime $heureMatch
     */
    public function setHeureMatch($heureMatch)
    {
        $this->heureMatch = $heureMatch;
    }

    /**
     * @return int
     */
    public function getStadeIdStade()
    {
        return $this->stadeIdStade;
    }

    /**
     * @param int $stadeIdStade
     */
    public function setStadeIdStade($stadeIdStade)
    {
        $this->stadeIdStade = $stadeIdStade;
    }

    /**
     * @return int
     */
    public function getIdJoueurGagnant()
    {
        return $this->idJoueurGagnant;
    }

    /**
     * @param int $idJoueurGagnant
     */
    public function setIdJoueurGagnant($idJoueurGagnant)
    {
        $this->idJoueurGagnant = $idJoueurGagnant;
    }

    /**
     * @return int
     */
    public function getTournoiIdTournoi()
    {
        return $this->tournoiIdTournoi;
    }

    /**
     * @param int $tournoiIdTournoi
     */
    public function setTournoiIdTournoi($tournoiIdTournoi)
    {
        $this->tournoiIdTournoi = $tournoiIdTournoi;
    }

    /**
     * @return string
     */
    public function getDureeMatch()
    {
        return $this->dureeMatch;
    }

    /**
     * @param string $dureeMatch
     */
    public function setDureeMatch($dureeMatch)
    {
        $this->dureeMatch = $dureeMatch;
    }

    /**
     * @return int
     */
    public function getScoreJoueur1()
    {
        return $this->scoreJoueur1;
    }

    /**
     * @param int $scoreJoueur1
     */
    public function setScoreJoueur1($scoreJoueur1)
    {
        $this->scoreJoueur1 = $scoreJoueur1;
    }

    /**
     * @return int
     */
    public function getScoreJoueur2()
    {
        return $this->scoreJoueur2;
    }

    /**
     * @param int $scoreJoueur2
     */
    public function setScoreJoueur2($scoreJoueur2)
    {
        $this->scoreJoueur2 = $scoreJoueur2;
    }

    /**
     * @return \Utilisateur
     */
    public function getUserUser()
    {
        return $this->userUser;
    }

    /**
     * @param \Utilisateur $userUser
     */
    public function setUserUser($userUser)
    {
        $this->userUser = $userUser;
    }

    /**
     * @return \Joueur
     */
    public function getJoueur1Joueur()
    {
        return $this->joueur1Joueur;
    }

    /**
     * @param \Joueur $joueur1Joueur
     */
    public function setJoueur1Joueur($joueur1Joueur)
    {
        $this->joueur1Joueur = $joueur1Joueur;
    }

    /**
     * @return \Joueur
     */
    public function getJoueur2Joueur()
    {
        return $this->joueur2Joueur;
    }

    /**
     * @param \Joueur $joueur2Joueur
     */
    public function setJoueur2Joueur($joueur2Joueur)
    {
        $this->joueur2Joueur = $joueur2Joueur;
    }

    function __toString()
    {
        return $this->joueur1Joueur . " vs." . $this->joueur2Joueur;
    }


}

