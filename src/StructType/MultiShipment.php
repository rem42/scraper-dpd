<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipment StructType
 */
class MultiShipment extends AbstractStructBase
{
    /**
     * The mastershipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Shipment
     */
    public $mastershipment;
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
     * Constructor method for MultiShipment
     *
     * @uses MultiShipment::setMastershipment()
     * @uses MultiShipment::setShipments()
     */
    public function __construct(?Shipment $mastershipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments)
        ;
    }

    /**
     * Get mastershipment value
     *
     * @return Shipment|null
     */
    public function getMastershipment()
    {
        return $this->mastershipment;
    }

    /**
     * Set mastershipment value
     *
     * @return self
     */
    public function setMastershipment(?Shipment $mastershipment = null)
    {
        $this->mastershipment = $mastershipment;
        return $this;
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
}
