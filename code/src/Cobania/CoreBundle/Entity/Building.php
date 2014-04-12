<?php

namespace Cobania\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building", indexes={@ORM\Index(name="fk_building_building_type1_idx", columns={"building_type_id"}), @ORM\Index(name="fk_building_business1_idx", columns={"business_id"}), @ORM\Index(name="fk_building_plot1_idx", columns={"plot_id"}), @ORM\Index(name="fk_building_production1_idx", columns={"production_id"}), @ORM\Index(name="fk_building_level1_idx", columns={"level_id"})})
 * @ORM\Entity(repositoryClass="Cobania\CoreBundle\Entity")
 */
class Building
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
     * @var \BuildingType
     *
     * @ORM\ManyToOne(targetEntity="BuildingType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="building_type_id", referencedColumnName="id")
     * })
     */
    private $buildingType;

    /**
     * @var \Business
     *
     * @ORM\ManyToOne(targetEntity="Business")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="business_id", referencedColumnName="id")
     * })
     */
    private $business;

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
     * @var \Plot
     *
     * @ORM\ManyToOne(targetEntity="Plot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plot_id", referencedColumnName="id")
     * })
     */
    private $plot;

    /**
     * @var \Production
     *
     * @ORM\ManyToOne(targetEntity="Production")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="production_id", referencedColumnName="id")
     * })
     */
    private $production;



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
     * Set buildingType
     *
     * @param \Cobania\CoreBundle\Entity\BuildingType $buildingType
     * @return Building
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
     * Set business
     *
     * @param \Cobania\CoreBundle\Entity\Business $business
     * @return Building
     */
    public function setBusiness(\Cobania\CoreBundle\Entity\Business $business = null)
    {
        $this->business = $business;

        return $this;
    }

    /**
     * Get business
     *
     * @return \Cobania\CoreBundle\Entity\Business 
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * Set level
     *
     * @param \Cobania\CoreBundle\Entity\Level $level
     * @return Building
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

    /**
     * Set plot
     *
     * @param \Cobania\CoreBundle\Entity\Plot $plot
     * @return Building
     */
    public function setPlot(\Cobania\CoreBundle\Entity\Plot $plot = null)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return \Cobania\CoreBundle\Entity\Plot 
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set production
     *
     * @param \Cobania\CoreBundle\Entity\Production $production
     * @return Building
     */
    public function setProduction(\Cobania\CoreBundle\Entity\Production $production = null)
    {
        $this->production = $production;

        return $this;
    }

    /**
     * Get production
     *
     * @return \Cobania\CoreBundle\Entity\Production 
     */
    public function getProduction()
    {
        return $this->production;
    }
}
