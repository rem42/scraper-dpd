<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateShipment StructType
 */
class TerminateShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var TerminateShipmentRequest
     */
    public $request;

    /**
     * Constructor method for TerminateShipment
     *
     * @uses TerminateShipment::setRequest()
     */
    public function __construct(?TerminateShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return TerminateShipmentRequest|null
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
    public function setRequest(?TerminateShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
