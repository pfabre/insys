<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitud
 *
 * @ORM\Table(name="Solicitud")
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
     * @var CampoAfin;
     *
     * @ORM\ManyToOne(targetEntity="CampoAfin",inversedBy="misCamposAfines")
     */
    private $misCamposAfines;
    /**
     * @var Estatus;
     * @ORM\ManyToOne(targetEntity="Estatus",inversedBy="misEstados")
     */
    private $misEstados;


    /**
     * Solicitud constructor.
     */
    public function __construct()
    {
     $this ->misEstados = new ArrayCollection();
     $this->usuarioAsignado =new ArrayCollection();
     $this->usuarioSolicitante =new ArrayCollection();
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
     * @return Usuario
     */
    public function getUsuarioSolicitante()
    {
        return $this->usuarioSolicitante;
    }

    /**
     * @param Usuario $usuarioSolicitante
     */
    public function setUsuarioSolicitante($usuarioSolicitante)
    {
        $this->usuarioSolicitante = $usuarioSolicitante;
    }

    /**
     * @return Estatus
     */
    public function getMisEstados()
    {
        return $this->misEstados;
    }

    /**
     * @param Estatus $misEstados
     */
    public function setMisEstados($misEstados)
    {
        $this->misEstados = $misEstados;
    }

    /**
     * @return CampoAfin
     */
    public function getMisCamposAfines()
    {
        return $this->misCamposAfines;
    }

    /**
     * @param CampoAfin $misCamposAfines
     */
    public function setMisCamposAfines($misCamposAfines)
    {
        $this->misCamposAfines = $misCamposAfines;
    }

}

