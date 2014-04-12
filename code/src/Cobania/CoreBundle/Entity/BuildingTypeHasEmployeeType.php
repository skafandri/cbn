<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingTypeHasEmployeeType
 *
 * @ORM\Table(name="building_type_has_employee_type", indexes={@ORM\Index(name="fk_building_type_has_employee_type_employee_type1_idx", columns={"employee_type_id"}), @ORM\Index(name="fk_building_type_has_employee_type_building_type1_idx", columns={"building_type_id"}), @ORM\Index(name="fk_building_type_has_employee_type_level1_idx", columns={"level_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class BuildingTypeHasEmployeeType
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
     * @ORM\Column(name="maximum_capacity", type="integer", nullable=true)
     */
    private $maximumCapacity = '0';

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
     * @var \EmployeeType
     *
     * @ORM\ManyToOne(targetEntity="EmployeeType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_type_id", referencedColumnName="id")
     * })
     */
    private $employeeType;

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
     * Set maximumCapacity
     *
     * @param integer $maximumCapacity
     * @return BuildingTypeHasEmployeeType
     */
    public function setMaximumCapacity($maximumCapacity)
    {
        $this->maximumCapacity = $maximumCapacity;

        return $this;
    }

    /**
     * Get maximumCapacity
     *
     * @return integer 
     */
    public function getMaximumCapacity()
    {
        return $this->maximumCapacity;
    }

    /**
     * Set buildingType
     *
     * @param \Cobania\CoreBundle\Entity\BuildingType $buildingType
     * @return BuildingTypeHasEmployeeType
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
     * Set employeeType
     *
     * @param \Cobania\CoreBundle\Entity\EmployeeType $employeeType
     * @return BuildingTypeHasEmployeeType
     */
    public function setEmployeeType(\Cobania\CoreBundle\Entity\EmployeeType $employeeType = null)
    {
        $this->employeeType = $employeeType;

        return $this;
    }

    /**
     * Get employeeType
     *
     * @return \Cobania\CoreBundle\Entity\EmployeeType 
     */
    public function getEmployeeType()
    {
        return $this->employeeType;
    }

    /**
     * Set level
     *
     * @param \Cobania\CoreBundle\Entity\Level $level
     * @return BuildingTypeHasEmployeeType
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
