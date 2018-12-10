<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Estatus
 *
 * @ORM\Table(name="estatus")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EstatusRepository")
 */
class Estatus
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
     * @ORM\Column(name="descripcion", type="string")
     */
    private $descripcion;
    /**
     * @var
     * @ORM\OneToMany(targetEntity="Solicitud",mappedBy="misEstados")
     */

    private $misEstados;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="SolicitudEstatus",mappedBy="EstatusSolicitudEstado")
     */
    private $EstatusSolicitudEstado;

    /**
     * Estatus constructor.
     *
     */
    public function __construct()
    {

        $this->misEstados =new ArrayCollection();
        $this ->EstatusSolicitudEstado =new ArrayCollection();
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
     * Set espera
     *
     * @param string $descricion
     *
     * @return descripcion
     */
    public function setDescripcion($descricion)
    {
        $this->descripcion = $descricion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getSolicitudEstatus()
    {
        return $this->solicitudEstatus;
    }

    /**
     * @param mixed $solicitudEstatus
     */
    public function setSolicitudEstatus($solicitudEstatus)
    {
        $this->solicitudEstatus = $solicitudEstatus;
    }

}

