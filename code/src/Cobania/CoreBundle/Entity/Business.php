<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Business
 *
 * @ORM\Table(name="business", indexes={@ORM\Index(name="fk_business_user_idx", columns={"user_id"}), @ORM\Index(name="fk_business_business_type1_idx", columns={"business_type_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class Business
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", nullable=true)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Employee", mappedBy="business")
     */
    private $employee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employee = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Business
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
     * Set amount
     *
     * @param integer $amount
     * @return Business
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Business
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set businessType
     *
     * @param \Cobania\CoreBundle\Entity\BusinessType $businessType
     * @return Business
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

    /**
     * Set user
     *
     * @param \Cobania\CoreBundle\Entity\User $user
     * @return Business
     */
    public function setUser(\Cobania\CoreBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Cobania\CoreBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add employee
     *
     * @param \Cobania\CoreBundle\Entity\Employee $employee
     * @return Business
     */
    public function addEmployee(\Cobania\CoreBundle\Entity\Employee $employee)
    {
        $this->employee[] = $employee;

        return $this;
    }

    /**
     * Remove employee
     *
     * @param \Cobania\CoreBundle\Entity\Employee $employee
     */
    public function removeEmployee(\Cobania\CoreBundle\Entity\Employee $employee)
    {
        $this->employee->removeElement($employee);
    }

    /**
     * Get employee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmployee()
    {
        return $this->employee;
    }
}
