<?php

namespace Prueba\pruebaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poliza
 *
 * @ORM\Table(name="symfony2.poliza", uniqueConstraints={@ORM\UniqueConstraint(name="unipoliza", columns={"idp"})}, indexes={@ORM\Index(name="IDX_CBC02C76B05317", columns={"idv"}), @ORM\Index(name="IDX_CBC02C766D6DB7FC", columns={"idc"}), @ORM\Index(name="IDX_CBC02C768363D6D0", columns={"ida"})})
 * @ORM\Entity
 */
class Poliza
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idp", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="comision", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $comision;

    /**
     * @var \Symfony2.vendedor
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Vendedor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idv", referencedColumnName="idv")
     * })
     */
    private $idv;

    /**
     * @var \Symfony2.cliente
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idc", referencedColumnName="idc")
     * })
     */
    private $idc;

    /**
     * @var \Symfony2.auto
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Auto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ida", referencedColumnName="ida")
     * })
     */
    private $ida;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="polizas")
     * @ORM\JoinColumn(name="idc", referencedColumnName="idc")
     */
    protected $clientes;

    /**
     * Set id
     *
     * @param integer $id
     * @return Poliza
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
     * Set importe
     *
     * @param string $importe
     * @return Poliza
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set comision
     *
     * @param string $comision
     * @return Poliza
     */
    public function setComision($comision)
    {
        $this->comision = $comision;

        return $this;
    }

    /**
     * Get comision
     *
     * @return string 
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * Set idv
     *
     * @param \Prueba\pruebaBundle\Entity\Vendedor $idv
     * @return Poliza
     */
    public function setIdv(\Prueba\pruebaBundle\Entity\Vendedor $idv)
    {
        $this->idv = $idv;

        return $this;
    }

    /**
     * Get idv
     *
     * @return \Prueba\pruebaBundle\Entity\Vendedor 
     */
    public function getIdv()
    {
        return $this->idv;
    }

    /**
     * Set idc
     *
     * @param \Prueba\pruebaBundle\Entity\Cliente $idc
     * @return Poliza
     */
    public function setIdc(\Prueba\pruebaBundle\Entity\Cliente $idc)
    {
        $this->idc = $idc;

        return $this;
    }

    /**
     * Get idc
     *
     * @return \Prueba\pruebaBundle\Entity\Cliente 
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * Set ida
     *
     * @param \Prueba\pruebaBundle\Entity\Auto $ida
     * @return Poliza
     */
    public function setIda(\Prueba\pruebaBundle\Entity\Auto $ida)
    {
        $this->ida = $ida;

        return $this;
    }

    /**
     * Get ida
     *
     * @return \Prueba\pruebaBundle\Entity\Auto 
     */
    public function getIda()
    {
        return $this->ida;
    }
   

    /**
     * Set clientes
     *
     * @param \Prueba\pruebaBundle\Entity\Cliente $clientes
     * @return Poliza
     */
    public function setClientes(\Prueba\pruebaBundle\Entity\Cliente $clientes = null)
    {
        $this->clientes = $clientes;

        return $this;
    }

    /**
     * Get clientes
     *
     * @return \Prueba\pruebaBundle\Entity\Cliente 
     */
    public function getClientes()
    {
        return $this->clientes;
    }
}
