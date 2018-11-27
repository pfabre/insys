<?php

namespace AppBundle\Entity;

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
     * @var bool
     *
     * @ORM\Column(name="espera", type="boolean")
     */
    private $espera;

    /**
     * @var bool
     *
     * @ORM\Column(name="proceso", type="boolean")
     */
    private $proceso;

    /**
     * @var bool
     *
     * @ORM\Column(name="pausado", type="boolean")
     */
    private $pausado;

    /**
     * @var bool
     *
     * @ORM\Column(name="asignado", type="boolean")
     */
    private $asignado;

    /**
     * @var bool
     *
     * @ORM\Column(name="cancelado", type="boolean")
     */
    private $cancelado;

    /**
     * @var bool
     *
     * @ORM\Column(name="terminado", type="boolean")
     */
    private $terminado;


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
     * @param boolean $espera
     *
     * @return Estatus
     */
    public function setEspera($espera)
    {
        $this->espera = $espera;

        return $this;
    }

    /**
     * Get espera
     *
     * @return bool
     */
    public function getEspera()
    {
        return $this->espera;
    }

    /**
     * Set proceso
     *
     * @param boolean $proceso
     *
     * @return Estatus
     */
    public function setProceso($proceso)
    {
        $this->proceso = $proceso;

        return $this;
    }

    /**
     * Get proceso
     *
     * @return bool
     */
    public function getProceso()
    {
        return $this->proceso;
    }

    /**
     * Set pausado
     *
     * @param boolean $pausado
     *
     * @return Estatus
     */
    public function setPausado($pausado)
    {
        $this->pausado = $pausado;

        return $this;
    }

    /**
     * Get pausado
     *
     * @return bool
     */
    public function getPausado()
    {
        return $this->pausado;
    }

    /**
     * Set asignado
     *
     * @param boolean $asignado
     *
     * @return Estatus
     */
    public function setAsignado($asignado)
    {
        $this->asignado = $asignado;

        return $this;
    }

    /**
     * Get asignado
     *
     * @return bool
     */
    public function getAsignado()
    {
        return $this->asignado;
    }

    /**
     * Set cancelado
     *
     * @param boolean $cancelado
     *
     * @return Estatus
     */
    public function setCancelado($cancelado)
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    /**
     * Get cancelado
     *
     * @return bool
     */
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set terminado
     *
     * @param boolean $terminado
     *
     * @return Estatus
     */
    public function setTerminado($terminado)
    {
        $this->terminado = $terminado;

        return $this;
    }

    /**
     * Get terminado
     *
     * @return bool
     */
    public function getTerminado()
    {
        return $this->terminado;
    }
}

