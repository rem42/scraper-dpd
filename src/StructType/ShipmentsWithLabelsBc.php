<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentsWithLabelsBc StructType
 */
class ShipmentsWithLabelsBc extends AbstractStructBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc
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
     * Constructor method for ShipmentsWithLabelsBc
     *
     * @uses ShipmentsWithLabelsBc::setShipments()
     * @uses ShipmentsWithLabelsBc::setLabels()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels)
        ;
    }

    /**
     * Get shipments value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc|null
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
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null)
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
