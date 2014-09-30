<?php

namespace Prueba\pruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="symfony2.cliente")
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="symfony2.cliente_idc_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=30, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=30, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=30, nullable=false)
     */
    private $ciudad;

    /**
     * @ORM\OneToMany(targetEntity="Poliza", mappedBy="clientes")
     */
    protected $polizas;

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
     * Set nombres
     *
     * @param string $nombres
     * @return Cliente
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Cliente
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Cliente
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->polizas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add polizas
     *
     * @param \Prueba\pruebaBundle\Entity\Poliza $polizas
     * @return Cliente
     */
    public function addPoliza(\Prueba\pruebaBundle\Entity\Poliza $polizas)
    {
        $this->polizas[] = $polizas;

        return $this;
    }

    /**
     * Remove polizas
     *
     * @param \Prueba\pruebaBundle\Entity\Poliza $polizas
     */
    public function removePoliza(\Prueba\pruebaBundle\Entity\Poliza $polizas)
    {
        $this->polizas->removeElement($polizas);
    }

    /**
     * Get polizas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPolizas()
    {
        return $this->polizas;
    }
}
