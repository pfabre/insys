<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario_Campo_Afin
 *
 * @ORM\Table(name="usuario__campo__afin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Usuario_Campo_AfinRepository")
 */
class Usuario_Campo_Afin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="campo_afin_ID", type="integer")
     */
    private $campoAfinID;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set campoAfinID
     *
     * @param integer $campoAfinID
     *
     * @return Usuario_Campo_Afin
     */
    public function setCampoAfinID($campoAfinID)
    {
        $this->campoAfinID = $campoAfinID;

        return $this;
    }

    /**
     * Get campoAfinID
     *
     * @return int
     */
    public function getCampoAfinID()
    {
        return $this->campoAfinID;
    }
}

