<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BusinessType
 *
 * @ORM\Table(name="business_type", indexes={@ORM\Index(name="fk_business_type_land1_idx", columns={"land_id"})})
 * @ORM\Entity
 */
class BusinessType
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @var \Land
     *
     * @ORM\ManyToOne(targetEntity="Land")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="land_id", referencedColumnName="id")
     * })
     */
    private $land;



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
     * @return BusinessType
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
     * Set code
     *
     * @param string $code
     * @return BusinessType
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set land
     *
     * @param \Cobania\CoreBundle\Entity\Land $land
     * @return BusinessType
     */
    public function setLand(\Cobania\CoreBundle\Entity\Land $land = null)
    {
        $this->land = $land;

        return $this;
    }

    /**
     * Get land
     *
     * @return \Cobania\CoreBundle\Entity\Land 
     */
    public function getLand()
    {
        return $this->land;
    }
}
