<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudNota
 *
 * @ORM\Table(name="solicitud_nota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SolicitudNotaRepository")
 */
class SolicitudNota
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
     * @ORM\Column(name="nota", type="string", length=255)
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var Solicitud;
     *
     * @ORM\ManyToOne(targetEntity="Solicitud",inversedBy="NotasSolicitud")
     */
    private $NotasSolicitud;

    /**
     * @var Usuario;
     *
     * @ORM\ManyToOne(targetEntity="Usuario",inversedBy="UsuarioSolicitudNota")
     */
    private $UsuarioSolicitudNota;



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
     * Set nota
     *
     * @param string $nota
     *
     * @return SolicitudNota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return SolicitudNota
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



}

