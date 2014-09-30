<?php

namespace Prueba\pruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="producto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=50, nullable=false)
     */
    private $marca;

    /**
     * @var integer
     *
     * @ORM\Column(name="precio", type="integer", nullable=false)
     */
    private $precio;


    /**
     * @ORM\OneToMany(targetEntity="Poliza", mappedBy="producto")
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
     * Set nombre
     *
     * @param string $nombre
     * @return Producto
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
     * Set marca
     *
     * @param string $marca
     * @return Producto
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     * @return Producto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
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
     * @return Producto
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
