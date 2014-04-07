<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessTypeHasBuildingType
 *
 * @ORM\Table(name="business_type_has_building_type", indexes={@ORM\Index(name="fk_business_type_has_building_type_building_type1_idx", columns={"building_type_id"}), @ORM\Index(name="fk_business_type_has_building_type_business_type1_idx", columns={"business_type_id"})})
 * @ORM\Entity
 */
class BusinessTypeHasBuildingType
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
     * @ORM\Column(name="maximum", type="integer", nullable=true)
     */
    private $maximum;

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
     * @var \BusinessType
     *
     * @ORM\ManyToOne(targetEntity="BusinessType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="business_type_id", referencedColumnName="id")
     * })
     */
    private $businessType;



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
     * Set maximum
     *
     * @param integer $maximum
     * @return BusinessTypeHasBuildingType
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * Get maximum
     *
     * @return integer 
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * Set buildingType
     *
     * @param \Cobania\CoreBundle\Entity\BuildingType $buildingType
     * @return BusinessTypeHasBuildingType
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
     * Set businessType
     *
     * @param \Cobania\CoreBundle\Entity\BusinessType $businessType
     * @return BusinessTypeHasBuildingType
     */
    public function setBusinessType(\Cobania\CoreBundle\Entity\BusinessType $businessType = null)
    {
        $this->businessType = $businessType;

        return $this;
    }

    /**
     * Get businessType
     *
     * @return \Cobania\CoreBundle\Entity\BusinessType 
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }
}
