<?php

namespace SISCABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="grupo", indexes={@ORM\Index(name="fk_grupo_Carrera1_idx", columns={"carrera"})})
 * @ORM\Entity
 */
class Grupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="grado", type="integer", nullable=false)
     */
    private $grado;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=1, nullable=false)
     */
    private $grupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="generacion", type="integer", nullable=false)
     */
    private $generacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado = '1';

    /**
     * @var \Carrera
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Carrera")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrera", referencedColumnName="id")
     * })
     */
    private $carrera;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Grupo
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set grado
     *
     * @param integer $grado
     *
     * @return Grupo
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return integer
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Grupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set generacion
     *
     * @param integer $generacion
     *
     * @return Grupo
     */
    public function setGeneracion($generacion)
    {
        $this->generacion = $generacion;

        return $this;
    }

    /**
     * Get generacion
     *
     * @return integer
     */
    public function getGeneracion()
    {
        return $this->generacion;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Grupo
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
     * Set carrera
     *
     * @param \SISCABundle\Entity\Carrera $carrera
     *
     * @return Grupo
     */
    public function setCarrera(\SISCABundle\Entity\Carrera $carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get carrera
     *
     * @return \SISCABundle\Entity\Carrera
     */
    public function getCarrera()
    {
        return $this->carrera;
    }
}
