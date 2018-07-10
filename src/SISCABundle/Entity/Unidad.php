<?php

namespace SISCABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Unidad
 *
 * @ORM\Table(name="unidad", indexes={@ORM\Index(name="fk_Unidad_Materia1", columns={"materia"})})
 * @ORM\Entity
 */
class Unidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUnidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idunidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="numeroUnidad", type="integer", nullable=false)
     */
    private $numerounidad;

    /**
     * @var \Materia
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia", referencedColumnName="idMateria")
     * })
     */
    private $materia;



    /**
     * Set idunidad
     *
     * @param integer $idunidad
     *
     * @return Unidad
     */
    public function setIdunidad($idunidad)
    {
        $this->idunidad = $idunidad;

        return $this;
    }

    /**
     * Get idunidad
     *
     * @return integer
     */
    public function getIdunidad()
    {
        return $this->idunidad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Unidad
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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Unidad
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set numerounidad
     *
     * @param integer $numerounidad
     *
     * @return Unidad
     */
    public function setNumerounidad($numerounidad)
    {
        $this->numerounidad = $numerounidad;

        return $this;
    }

    /**
     * Get numerounidad
     *
     * @return integer
     */
    public function getNumerounidad()
    {
        return $this->numerounidad;
    }

    /**
     * Set materia
     *
     * @param \SISCABundle\Entity\Materia $materia
     *
     * @return Unidad
     */
    public function setMateria(\SISCABundle\Entity\Materia $materia)
    {
        $this->materia = $materia;

        return $this;
    }

    /**
     * Get materia
     *
     * @return \SISCABundle\Entity\Materia
     */
    public function getMateria()
    {
        return $this->materia;
    }
}
