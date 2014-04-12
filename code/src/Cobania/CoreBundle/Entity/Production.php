<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Production
 *
 * @ORM\Table(name="production", indexes={@ORM\Index(name="fk_production_product_type1_idx", columns={"product_type_id"}), @ORM\Index(name="fk_production_building_type1_idx", columns={"building_type_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class Production
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
     * @var \BuildingType
     *
     * @ORM\ManyToOne(targetEntity="BuildingType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_type_id", referencedColumnName="id")
     * })
     */
    private $buildingType;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ability", inversedBy="production")
     * @ORM\JoinTable(name="production_needs_ability",
     *   joinColumns={
     *     @ORM\JoinColumn(name="production_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ability_id", referencedColumnName="id")
     *   }
     * )
     */
    private $ability;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ability = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set buildingType
     *
     * @param \Cobania\CoreBundle\Entity\BuildingType $buildingType
     * @return Production
     */
    public function setBuildingType(\Cobania\CoreBundle\Entity\BuildingType $buildingType = null)
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    /**
     * Get buildingType
     *
     * @return \Cobania\CoreBundle\Entity\BuildingType 
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * Set productType
     *
     * @param \Cobania\CoreBundle\Entity\ProductType $productType
     * @return Production
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

    /**
     * Add ability
     *
     * @param \Cobania\CoreBundle\Entity\Ability $ability
     * @return Production
     */
    public function addAbility(\Cobania\CoreBundle\Entity\Ability $ability)
    {
        $this->ability[] = $ability;

        return $this;
    }

    /**
     * Remove ability
     *
     * @param \Cobania\CoreBundle\Entity\Ability $ability
     */
    public function removeAbility(\Cobania\CoreBundle\Entity\Ability $ability)
    {
        $this->ability->removeElement($ability);
    }

    /**
     * Get ability
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbility()
    {
        return $this->ability;
    }
}
