<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductType
 *
 * @ORM\Table(name="product_type")
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class ProductType
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
     * @var integer
     *
     * @ORM\Column(name="minimum_price", type="integer", nullable=true)
     */
    private $minimumPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximun_price", type="integer", nullable=true)
     */
    private $maximunPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;



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
     * @return ProductType
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
     * @return ProductType
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
     * Set minimumPrice
     *
     * @param integer $minimumPrice
     * @return ProductType
     */
    public function setMinimumPrice($minimumPrice)
    {
        $this->minimumPrice = $minimumPrice;

        return $this;
    }

    /**
     * Get minimumPrice
     *
     * @return integer 
     */
    public function getMinimumPrice()
    {
        return $this->minimumPrice;
    }

    /**
     * Set maximunPrice
     *
     * @param integer $maximunPrice
     * @return ProductType
     */
    public function setMaximunPrice($maximunPrice)
    {
        $this->maximunPrice = $maximunPrice;

        return $this;
    }

    /**
     * Get maximunPrice
     *
     * @return integer 
     */
    public function getMaximunPrice()
    {
        return $this->maximunPrice;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return ProductType
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }
}
