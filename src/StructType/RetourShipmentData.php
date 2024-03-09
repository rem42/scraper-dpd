<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourShipmentData StructType
 */
class RetourShipmentData extends ShipmentData
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RetourServices
     */
    public $services;

    /**
     * Constructor method for RetourShipmentData
     *
     * @uses RetourShipmentData::setServices()
     */
    public function __construct(?RetourServices $services = null)
    {
        $this
            ->setServices($services)
        ;
    }

    /**
     * Get services value
     *
     * @return RetourServices|null
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set services value
     *
     * @return self
     */
    public function setServices(?RetourServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
