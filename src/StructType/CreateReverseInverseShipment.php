<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipment StructType
 */
class CreateReverseInverseShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReverseShipmentRequest
     */
    public $request;

    /**
     * Constructor method for CreateReverseInverseShipment
     *
     * @uses CreateReverseInverseShipment::setRequest()
     */
    public function __construct(?ReverseShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return ReverseShipmentRequest|null
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
    public function setRequest(?ReverseShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
