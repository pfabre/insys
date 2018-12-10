<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Campo_Afin
 *
 * @ORM\Table(name="campo__afin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Campo_AfinRepository")
 */
class CampoAfin
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="Solicitud",mappedBy="misCamposAfines")
     */

    private $misCamposAfines;

    /**
     * CamposAfin constructor.
     *
     */
    public function __construct()
    {
        $this->misCamposAfines = new ArrayCollection();
    }

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Campo_Afin
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getMisCamposAfines()
    {
        return $this->misCamposAfines;
    }

    /**
     * @param mixed $misCamposAfines
     */
    public function setMisCamposAfines($misCamposAfines)
    {
        $this->misCamposAfines = $misCamposAfines;
    }

}

