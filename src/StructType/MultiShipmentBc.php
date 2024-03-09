<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipmentBc StructType
 */
class MultiShipmentBc extends AbstractStructBase
{
    /**
     * The mastershipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentBc
     */
    public $mastershipment;
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
     * Constructor method for MultiShipmentBc
     *
     * @uses MultiShipmentBc::setMastershipment()
     * @uses MultiShipmentBc::setShipments()
     */
    public function __construct(?ShipmentBc $mastershipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments)
        ;
    }

    /**
     * Get mastershipment value
     *
     * @return ShipmentBc|null
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
    public function setMastershipment(?ShipmentBc $mastershipment = null)
    {
        $this->mastershipment = $mastershipment;
        return $this;
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
}
