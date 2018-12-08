<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SolicitudRepository")
 */
class Solicitud
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
     * @ORM\Column(name="Titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var Usuario;
     *
     * @ORM\ManyToOne(targetEntity="Usuario",inversedBy="misSolicitudes")
     */
    private $usuarioSolicitante;
    /**
     * @var Usuario;
     *
     * @ORM\ManyToOne(targetEntity="Usuario",inversedBy="misSolicitudes")
     */
    private $usuarioAsignado;

    /**
     * @var Estado;
     * @ORM\ManyToOne (targetEntity="Estado",inversedBy="misEstados")
     */
    private $usuarioEstado;

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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Solicitud
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Solicitud
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Solicitud
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
     * Set usuarioSolicitanteID
     *
     * @param integer $usuarioSolicitanteID
     *
     * @return Solicitud
     */
    public function setUsuarioSolicitanteID($usuarioSolicitanteID)
    {
        $this->usuarioSolicitanteID = $usuarioSolicitanteID;

        return $this;
    }

    /**
     * Get usuarioSolicitanteID
     *
     * @return int
     */
    public function getUsuarioSolicitanteID()
    {
        return $this->usuarioSolicitanteID;
    }

    /**
     * @return Usuario
     */
    public function getUsuarioAsignado()
    {
        return $this->usuarioAsignado;
    }

    /**
     * @param Usuario $usuarioAsignado
     */
    public function setUsuarioAsignado($usuarioAsignado)
    {
        $this->usuarioAsignado = $usuarioAsignado;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Solicitud
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return int
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set campoAfin
     *
     * @param integer $campoAfin
     *
     * @return Solicitud
     */
    public function setCampoAfin($campoAfin)
    {
        $this->campoAfin = $campoAfin;

        return $this;
    }

    /**
     * Get campoAfin
     *
     * @return int
     */
    public function getCampoAfin()
    {
        return $this->campoAfin;
    }
}

