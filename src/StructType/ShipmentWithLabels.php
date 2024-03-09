<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentWithLabels StructType
 */
class ShipmentWithLabels extends AbstractStructBase
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Shipment
     */
    public $shipment;
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
     * Constructor method for ShipmentWithLabels
     *
     * @uses ShipmentWithLabels::setShipment()
     * @uses ShipmentWithLabels::setLabels()
     */
    public function __construct(?Shipment $shipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels)
        ;
    }

    /**
     * Get shipment value
     *
     * @return Shipment|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set shipment value
     *
     * @return self
     */
    public function setShipment(?Shipment $shipment = null)
    {
        $this->shipment = $shipment;
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
