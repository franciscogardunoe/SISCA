<?php

namespace SISCABundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calificacion
 *
 * @ORM\Table(name="calificacion", indexes={@ORM\Index(name="fk_Calificacion_Alumno1_idx", columns={"alumno"}), @ORM\Index(name="fk_Calificacion_Unidad1_idx", columns={"unidad"})})
 * @ORM\Entity
 */
class Calificacion
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
     * @var float
     *
     * @ORM\Column(name="asistencia", type="float", precision=10, scale=0, nullable=false)
     */
    private $asistencia = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="saberOrdinario", type="string", length=3, nullable=true)
     */
    private $saberordinario;

    /**
     * @var string
     *
     * @ORM\Column(name="hacerOrdinario", type="string", length=3, nullable=true)
     */
    private $hacerordinario;

    /**
     * @var string
     *
     * @ORM\Column(name="serOrdinario", type="string", length=3, nullable=true)
     */
    private $serordinario;

    /**
     * @var string
     *
     * @ORM\Column(name="promedioOrdinario", type="string", length=3, nullable=true)
     */
    private $promedioordinario;

    /**
     * @var string
     *
     * @ORM\Column(name="saberRecupera", type="string", length=3, nullable=true)
     */
    private $saberrecupera;

    /**
     * @var string
     *
     * @ORM\Column(name="hacerRecupera", type="string", length=3, nullable=true)
     */
    private $hacerrecupera;

    /**
     * @var string
     *
     * @ORM\Column(name="serRecupera", type="string", length=3, nullable=true)
     */
    private $serrecupera;

    /**
     * @var string
     *
     * @ORM\Column(name="promedioRecupera", type="string", length=3, nullable=true)
     */
    private $promediorecupera;

    /**
     * @var string
     *
     * @ORM\Column(name="saberExtra", type="string", length=3, nullable=true)
     */
    private $saberextra;

    /**
     * @var string
     *
     * @ORM\Column(name="hacerExtra", type="string", length=3, nullable=true)
     */
    private $hacerextra;

    /**
     * @var string
     *
     * @ORM\Column(name="serExtra", type="string", length=3, nullable=true)
     */
    private $serextra;

    /**
     * @var string
     *
     * @ORM\Column(name="promedioExtra", type="string", length=3, nullable=true)
     */
    private $promedioextra;

    /**
     * @var \Alumno
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alumno", referencedColumnName="id")
     * })
     */
    private $alumno;

    /**
     * @var \Unidad
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Unidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidad", referencedColumnName="idUnidad")
     * })
     */
    private $unidad;



    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Calificacion
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
     * Set asistencia
     *
     * @param float $asistencia
     *
     * @return Calificacion
     */
    public function setAsistencia($asistencia)
    {
        $this->asistencia = $asistencia;

        return $this;
    }

    /**
     * Get asistencia
     *
     * @return float
     */
    public function getAsistencia()
    {
        return $this->asistencia;
    }

    /**
     * Set saberordinario
     *
     * @param string $saberordinario
     *
     * @return Calificacion
     */
    public function setSaberordinario($saberordinario)
    {
        $this->saberordinario = $saberordinario;

        return $this;
    }

    /**
     * Get saberordinario
     *
     * @return string
     */
    public function getSaberordinario()
    {
        return $this->saberordinario;
    }

    /**
     * Set hacerordinario
     *
     * @param string $hacerordinario
     *
     * @return Calificacion
     */
    public function setHacerordinario($hacerordinario)
    {
        $this->hacerordinario = $hacerordinario;

        return $this;
    }

    /**
     * Get hacerordinario
     *
     * @return string
     */
    public function getHacerordinario()
    {
        return $this->hacerordinario;
    }

    /**
     * Set serordinario
     *
     * @param string $serordinario
     *
     * @return Calificacion
     */
    public function setSerordinario($serordinario)
    {
        $this->serordinario = $serordinario;

        return $this;
    }

    /**
     * Get serordinario
     *
     * @return string
     */
    public function getSerordinario()
    {
        return $this->serordinario;
    }

    /**
     * Set promedioordinario
     *
     * @param string $promedioordinario
     *
     * @return Calificacion
     */
    public function setPromedioordinario($promedioordinario)
    {
        $this->promedioordinario = $promedioordinario;

        return $this;
    }

    /**
     * Get promedioordinario
     *
     * @return string
     */
    public function getPromedioordinario()
    {
        return $this->promedioordinario;
    }

    /**
     * Set saberrecupera
     *
     * @param string $saberrecupera
     *
     * @return Calificacion
     */
    public function setSaberrecupera($saberrecupera)
    {
        $this->saberrecupera = $saberrecupera;

        return $this;
    }

    /**
     * Get saberrecupera
     *
     * @return string
     */
    public function getSaberrecupera()
    {
        return $this->saberrecupera;
    }

    /**
     * Set hacerrecupera
     *
     * @param string $hacerrecupera
     *
     * @return Calificacion
     */
    public function setHacerrecupera($hacerrecupera)
    {
        $this->hacerrecupera = $hacerrecupera;

        return $this;
    }

    /**
     * Get hacerrecupera
     *
     * @return string
     */
    public function getHacerrecupera()
    {
        return $this->hacerrecupera;
    }

    /**
     * Set serrecupera
     *
     * @param string $serrecupera
     *
     * @return Calificacion
     */
    public function setSerrecupera($serrecupera)
    {
        $this->serrecupera = $serrecupera;

        return $this;
    }

    /**
     * Get serrecupera
     *
     * @return string
     */
    public function getSerrecupera()
    {
        return $this->serrecupera;
    }

    /**
     * Set promediorecupera
     *
     * @param string $promediorecupera
     *
     * @return Calificacion
     */
    public function setPromediorecupera($promediorecupera)
    {
        $this->promediorecupera = $promediorecupera;

        return $this;
    }

    /**
     * Get promediorecupera
     *
     * @return string
     */
    public function getPromediorecupera()
    {
        return $this->promediorecupera;
    }

    /**
     * Set saberextra
     *
     * @param string $saberextra
     *
     * @return Calificacion
     */
    public function setSaberextra($saberextra)
    {
        $this->saberextra = $saberextra;

        return $this;
    }

    /**
     * Get saberextra
     *
     * @return string
     */
    public function getSaberextra()
    {
        return $this->saberextra;
    }

    /**
     * Set hacerextra
     *
     * @param string $hacerextra
     *
     * @return Calificacion
     */
    public function setHacerextra($hacerextra)
    {
        $this->hacerextra = $hacerextra;

        return $this;
    }

    /**
     * Get hacerextra
     *
     * @return string
     */
    public function getHacerextra()
    {
        return $this->hacerextra;
    }

    /**
     * Set serextra
     *
     * @param string $serextra
     *
     * @return Calificacion
     */
    public function setSerextra($serextra)
    {
        $this->serextra = $serextra;

        return $this;
    }

    /**
     * Get serextra
     *
     * @return string
     */
    public function getSerextra()
    {
        return $this->serextra;
    }

    /**
     * Set promedioextra
     *
     * @param string $promedioextra
     *
     * @return Calificacion
     */
    public function setPromedioextra($promedioextra)
    {
        $this->promedioextra = $promedioextra;

        return $this;
    }

    /**
     * Get promedioextra
     *
     * @return string
     */
    public function getPromedioextra()
    {
        return $this->promedioextra;
    }

    /**
     * Set alumno
     *
     * @param \SISCABundle\Entity\Alumno $alumno
     *
     * @return Calificacion
     */
    public function setAlumno(\SISCABundle\Entity\Alumno $alumno)
    {
        $this->alumno = $alumno;

        return $this;
    }

    /**
     * Get alumno
     *
     * @return \SISCABundle\Entity\Alumno
     */
    public function getAlumno()
    {
        return $this->alumno;
    }

    /**
     * Set unidad
     *
     * @param \SISCABundle\Entity\Unidad $unidad
     *
     * @return Calificacion
     */
    public function setUnidad(\SISCABundle\Entity\Unidad $unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return \SISCABundle\Entity\Unidad
     */
    public function getUnidad()
    {
        return $this->unidad;
    }
}
