<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentsWithLabels StructType
 */
class ShipmentsWithLabels extends AbstractStructBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipment
     */
    public $shipments;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfLabel
     */
    public $labels;

    /**
     * Constructor method for ShipmentsWithLabels
     *
     * @uses ShipmentsWithLabels::setShipments()
     * @uses ShipmentsWithLabels::setLabels()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels)
        ;
    }

    /**
     * Get shipments value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipment|null
     */
    public function getShipments()
    {
        return $this->shipments;
    }

    /**
     * Set shipments value
     *
     * @return self
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null)
    {
        $this->shipments = $shipments;
        return $this;
    }

    /**
     * Get labels value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfLabel|null
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set labels value
     *
     * @return self
     */
    public function setLabels(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
}
