<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingTypeHasLevel
 *
 * @ORM\Table(name="building_type_has_level", indexes={@ORM\Index(name="fk_building_type_has_level_level1_idx", columns={"level_id"}), @ORM\Index(name="fk_building_type_has_level_building_type1_idx", columns={"building_type_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class BuildingTypeHasLevel
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
     * @ORM\Column(name="employee_capacity", type="integer", nullable=true)
     */
    private $employeeCapacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="storage_size", type="integer", nullable=true)
     */
    private $storageSize;

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
     * @var \Level
     *
     * @ORM\ManyToOne(targetEntity="Level")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="level_id", referencedColumnName="id")
     * })
     */
    private $level;



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
     * Set employeeCapacity
     *
     * @param integer $employeeCapacity
     * @return BuildingTypeHasLevel
     */
    public function setEmployeeCapacity($employeeCapacity)
    {
        $this->employeeCapacity = $employeeCapacity;

        return $this;
    }

    /**
     * Get employeeCapacity
     *
     * @return integer 
     */
    public function getEmployeeCapacity()
    {
        return $this->employeeCapacity;
    }

    /**
     * Set storageSize
     *
     * @param integer $storageSize
     * @return BuildingTypeHasLevel
     */
    public function setStorageSize($storageSize)
    {
        $this->storageSize = $storageSize;

        return $this;
    }

    /**
     * Get storageSize
     *
     * @return integer 
     */
    public function getStorageSize()
    {
        return $this->storageSize;
    }

    /**
     * Set buildingType
     *
     * @param \Cobania\CoreBundle\Entity\BuildingType $buildingType
     * @return BuildingTypeHasLevel
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
     * Set level
     *
     * @param \Cobania\CoreBundle\Entity\Level $level
     * @return BuildingTypeHasLevel
     */
    public function setLevel(\Cobania\CoreBundle\Entity\Level $level = null)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return \Cobania\CoreBundle\Entity\Level 
     */
    public function getLevel()
    {
        return $this->level;
    }
}
