<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentRequestDefaultData StructType
 */
class ShipmentRequestDefaultData extends ShipmentRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var StdServices
     */
    public $services;

    /**
     * Constructor method for ShipmentRequestDefaultData
     *
     * @uses ShipmentRequestDefaultData::setServices()
     */
    public function __construct(?StdServices $services = null)
    {
        $this
            ->setServices($services)
        ;
    }

    /**
     * Get services value
     *
     * @return StdServices|null
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
    public function setServices(?StdServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
