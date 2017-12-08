<?php

namespace MyApp\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction", indexes={@ORM\Index(name="user_id_user", columns={"user_id_user"})})
 * @ORM\Entity
 */
class Transaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_transaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTransaction;

    /**
     * @var integer
     *
     * @ORM\Column(name="valeur_transaction", type="integer", nullable=false)
     */
    private $valeurTransaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transaction", type="datetime", nullable=false)
     */
    private $dateTransaction = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="type_transaction", type="string", length=20, nullable=false)
     */
    private $typeTransaction;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;


}

