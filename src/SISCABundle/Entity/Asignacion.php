<?php

namespace SISCABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion", indexes={@ORM\Index(name="fk_asignacionMaterias_maestro_idx", columns={"maestro"}), @ORM\Index(name="fk_asignacionMaterias_materia1_idx", columns={"materia"}), @ORM\Index(name="fk_asignacionMaterias_grupo1_idx", columns={"grupo"})})
 * @ORM\Entity
 */
class Asignacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var \Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var \Maestro
     *
     * @ORM\ManyToOne(targetEntity="Maestro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maestro", referencedColumnName="id")
     * })
     */
    private $maestro;

    /**
     * @var \Materia
     *
     * @ORM\ManyToOne(targetEntity="Materia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materia", referencedColumnName="idMateria")
     * })
     */
    private $materia;



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
     * Set estado
     *
     * @param integer $estado
     *
     * @return Asignacion
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
     * Set grupo
     *
     * @param \SISCABundle\Entity\Grupo $grupo
     *
     * @return Asignacion
     */
    public function setGrupo(\SISCABundle\Entity\Grupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \SISCABundle\Entity\Grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set maestro
     *
     * @param \SISCABundle\Entity\Maestro $maestro
     *
     * @return Asignacion
     */
    public function setMaestro(\SISCABundle\Entity\Maestro $maestro = null)
    {
        $this->maestro = $maestro;

        return $this;
    }

    /**
     * Get maestro
     *
     * @return \SISCABundle\Entity\Maestro
     */
    public function getMaestro()
    {
        return $this->maestro;
    }

    /**
     * Set materia
     *
     * @param \SISCABundle\Entity\Materia $materia
     *
     * @return Asignacion
     */
    public function setMateria(\SISCABundle\Entity\Materia $materia = null)
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
