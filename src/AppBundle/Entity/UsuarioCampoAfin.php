<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario_Campo_Afin
 *
 * @ORM\Table(name="usuario__campo__afin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Usuario_Campo_AfinRepository")
 */
class UsuarioCampoAfin
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
     * @var Usuario;
     *
     * @ORM\ManyToOne (targetEntity="Usuario",inversedBy="misUsuarios")
     */
    private $misUsuarios;
    /**
     * @var CampoAfin;
     * @ORM\ManyToOne (targetEntity="CampoAfin",inversedBy="misCamposAfines")
     */
    private $misCamposAfines;

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

