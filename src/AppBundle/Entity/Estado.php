<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstadoRepository")
 */
class Estado
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
     * @ORM\Column(name="Solicitud_ID", type="integer")
     */
    private $solicitudID;

    /**
     * @var int
     *
     * @ORM\Column(name="usuario_ID", type="integer")
     */
    private $usuarioID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="Solicitud",mappedBy="usuarioEstado")
     */

    private $misEstados;

    /**
     * Estado constructor.
     *
     */
    public function __construct()
    {
        $this->misEstados = new ArrayCollection();
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
     * Set solicitudID
     *
     * @param integer $solicitudID
     *
     * @return Estado
     */
    public function setSolicitudID($solicitudID)
    {
        $this->solicitudID = $solicitudID;

        return $this;
    }

    /**
     * Get solicitudID
     *
     * @return int
     */
    public function getSolicitudID()
    {
        return $this->solicitudID;
    }

    /**
     * Set usuarioID
     *
     * @param integer $usuarioID
     *
     * @return Estado
     */
    public function setUsuarioID($usuarioID)
    {
        $this->usuarioID = $usuarioID;

        return $this;
    }

    /**
     * Get usuarioID
     *
     * @return int
     */
    public function getUsuarioID()
    {
        return $this->usuarioID;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Estado
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

