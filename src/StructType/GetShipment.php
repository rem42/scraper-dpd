<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipment StructType
 */
class GetShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ShipmentRequest
     */
    public $request;

    /**
     * Constructor method for GetShipment
     *
     * @uses GetShipment::setRequest()
     */
    public function __construct(?ShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ShipmentRequest|null
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set request value
     *
     * @return self
     */
    public function setRequest(?ShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
