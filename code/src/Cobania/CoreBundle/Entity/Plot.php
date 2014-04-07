<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plot
 *
 * @ORM\Table(name="plot", indexes={@ORM\Index(name="fk_plot_land1_idx", columns={"land_id"})})
 * @ORM\Entity
 */
class Plot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
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
     * @ORM\Column(name="coordinates_x", type="integer", nullable=true)
     */
    private $coordinatesX;

    /**
     * @var integer
     *
     * @ORM\Column(name="coordinates_y", type="integer", nullable=true)
     */
    private $coordinatesY;

    /**
     * @var \Land
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Land")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="land_id", referencedColumnName="id")
     * })
     */
    private $land;



    /**
     * Set id
     *
     * @param integer $id
     * @return Plot
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set free
     *
     * @param boolean $free
     * @return Plot
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
     * Set coordinatesX
     *
     * @param integer $coordinatesX
     * @return Plot
     */
    public function setCoordinatesX($coordinatesX)
    {
        $this->coordinatesX = $coordinatesX;

        return $this;
    }

    /**
     * Get coordinatesX
     *
     * @return integer 
     */
    public function getCoordinatesX()
    {
        return $this->coordinatesX;
    }

    /**
     * Set coordinatesY
     *
     * @param integer $coordinatesY
     * @return Plot
     */
    public function setCoordinatesY($coordinatesY)
    {
        $this->coordinatesY = $coordinatesY;

        return $this;
    }

    /**
     * Get coordinatesY
     *
     * @return integer 
     */
    public function getCoordinatesY()
    {
        return $this->coordinatesY;
    }

    /**
     * Set land
     *
     * @param \Cobania\CoreBundle\Entity\Land $land
     * @return Plot
     */
    public function setLand(\Cobania\CoreBundle\Entity\Land $land)
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
