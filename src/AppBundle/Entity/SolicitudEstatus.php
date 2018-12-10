<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudEstatus
 *
 * @ORM\Table(name="solicitud_estatus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SolicitudEstatusRepository")
 */
class SolicitudEstatus
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
     * @var \Date
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var Estatus;
     *
     * @ORM\ManyToOne(targetEntity="Estatus",inversedBy="EstatusSolicitudEstado")
     */
    private $EstatusSolicitudEstado;

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
     * Set fecha
     *
     * @param \Date $fecha
     *
     * @return SolicitudEstatus
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \Date
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}

