<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employee
 *
 * @ORM\Table(name="employee", indexes={@ORM\Index(name="fk_employee_building1_idx", columns={"building_id"}), @ORM\Index(name="fk_employee_employee_type1_idx", columns={"employee_type_id"})})
 * @ORM\Entity
 */
class Employee
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
     * @var \Building
     *
     * @ORM\ManyToOne(targetEntity="Building")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_id", referencedColumnName="id")
     * })
     */
    private $building;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Business", inversedBy="employee")
     * @ORM\JoinTable(name="contract",
     *   joinColumns={
     *     @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="business_id", referencedColumnName="id")
     *   }
     * )
     */
    private $business;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->business = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set building
     *
     * @param \Cobania\CoreBundle\Entity\Building $building
     * @return Employee
     */
    public function setBuilding(\Cobania\CoreBundle\Entity\Building $building = null)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return \Cobania\CoreBundle\Entity\Building 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set employeeType
     *
     * @param \Cobania\CoreBundle\Entity\EmployeeType $employeeType
     * @return Employee
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
     * Add business
     *
     * @param \Cobania\CoreBundle\Entity\Business $business
     * @return Employee
     */
    public function addBusiness(\Cobania\CoreBundle\Entity\Business $business)
    {
        $this->business[] = $business;

        return $this;
    }

    /**
     * Remove business
     *
     * @param \Cobania\CoreBundle\Entity\Business $business
     */
    public function removeBusiness(\Cobania\CoreBundle\Entity\Business $business)
    {
        $this->business->removeElement($business);
    }

    /**
     * Get business
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBusiness()
    {
        return $this->business;
    }
}
