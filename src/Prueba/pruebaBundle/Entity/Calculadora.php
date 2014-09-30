<?php

namespace Prueba\pruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calculadora
 *
 * @ORM\Table(name="calculadora")
 * @ORM\Entity
 */
class Calculadora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="calculadora_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apaterno", type="string", length=100, nullable=false)
     */
    private $apaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="amaterno", type="string", length=100, nullable=false)
     */
    private $amaterno;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Calculadora
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
     * Set apaterno
     *
     * @param string $apaterno
     * @return Calculadora
     */
    public function setApaterno($apaterno)
    {
        $this->apaterno = $apaterno;

        return $this;
    }

    /**
     * Get apaterno
     *
     * @return string 
     */
    public function getApaterno()
    {
        return $this->apaterno;
    }

    /**
     * Set amaterno
     *
     * @param string $amaterno
     * @return Calculadora
     */
    public function setAmaterno($amaterno)
    {
        $this->amaterno = $amaterno;

        return $this;
    }

    /**
     * Get amaterno
     *
     * @return string 
     */
    public function getAmaterno()
    {
        return $this->amaterno;
    }
}
