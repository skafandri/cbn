<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ability
 *
 * @ORM\Table(name="ability", indexes={@ORM\Index(name="fk_ability_employee_type1_idx", columns={"employee_type_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class Ability
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
     * @ORM\Column(name="scope", type="integer", nullable=true)
     */
    private $scope;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

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
     * @ORM\ManyToMany(targetEntity="Production", mappedBy="ability")
     */
    private $production;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->production = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set scope
     *
     * @param integer $scope
     * @return Ability
     */
    public function setScope($scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Get scope
     *
     * @return integer 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Ability
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Ability
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set employeeType
     *
     * @param \Cobania\CoreBundle\Entity\EmployeeType $employeeType
     * @return Ability
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
     * Add production
     *
     * @param \Cobania\CoreBundle\Entity\Production $production
     * @return Ability
     */
    public function addProduction(\Cobania\CoreBundle\Entity\Production $production)
    {
        $this->production[] = $production;

        return $this;
    }

    /**
     * Remove production
     *
     * @param \Cobania\CoreBundle\Entity\Production $production
     */
    public function removeProduction(\Cobania\CoreBundle\Entity\Production $production)
    {
        $this->production->removeElement($production);
    }

    /**
     * Get production
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProduction()
    {
        return $this->production;
    }
}
