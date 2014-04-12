<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Land
 *
 * @ORM\Table(name="land")
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class Land
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
     * @var boolean
     *
     * @ORM\Column(name="free", type="boolean", nullable=true)
     */
    private $free = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;



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
     * Set free
     *
     * @param boolean $free
     * @return Land
     */
    public function setFree($free)
    {
        $this->free = $free;

        return $this;
    }

    /**
     * Get free
     *
     * @return boolean 
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Land
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
