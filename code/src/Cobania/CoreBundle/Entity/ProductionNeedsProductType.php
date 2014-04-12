<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductionNeedsProductType
 *
 * @ORM\Table(name="production_needs_product_type", indexes={@ORM\Index(name="fk_production_has_product_type_product_type1_idx", columns={"product_type_id"}), @ORM\Index(name="fk_production_has_product_type_production1_idx", columns={"production_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class ProductionNeedsProductType
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
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var \Production
     *
     * @ORM\ManyToOne(targetEntity="Production")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="production_id", referencedColumnName="id")
     * })
     */
    private $production;

    /**
     * @var \ProductType
     *
     * @ORM\ManyToOne(targetEntity="ProductType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_type_id", referencedColumnName="id")
     * })
     */
    private $productType;



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
     * Set quantity
     *
     * @param integer $quantity
     * @return ProductionNeedsProductType
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set production
     *
     * @param \Cobania\CoreBundle\Entity\Production $production
     * @return ProductionNeedsProductType
     */
    public function setProduction(\Cobania\CoreBundle\Entity\Production $production = null)
    {
        $this->production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return \Cobania\CoreBundle\Entity\Production 
     */
    public function getProduction()
    {
        return $this->production;
    }

    /**
     * Set productType
     *
     * @param \Cobania\CoreBundle\Entity\ProductType $productType
     * @return ProductionNeedsProductType
     */
    public function setProductType(\Cobania\CoreBundle\Entity\ProductType $productType = null)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return \Cobania\CoreBundle\Entity\ProductType 
     */
    public function getProductType()
    {
        return $this->productType;
    }
}
