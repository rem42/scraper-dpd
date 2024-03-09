<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for MultiShipmentRequest StructType
 */
class MultiShipmentRequest extends ShipmentRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var MultiServices
     */
    public $services;
    /**
     * The slaves
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest
     */
    public $slaves;

    /**
     * Constructor method for MultiShipmentRequest
     *
     * @uses MultiShipmentRequest::setServices()
     * @uses MultiShipmentRequest::setSlaves()
     */
    public function __construct(?MultiServices $services = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this
            ->setServices($services)
            ->setSlaves($slaves)
        ;
    }

    /**
     * Get services value
     *
     * @return MultiServices|null
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
    public function setServices(?MultiServices $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Get slaves value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest|null
     */
    public function getSlaves()
    {
        return $this->slaves;
    }

    /**
     * Set slaves value
     *
     * @return self
     */
    public function setSlaves(?\Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this->slaves = $slaves;
        return $this;
    }
}
