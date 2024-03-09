<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentBc StructType
 */
class CreateMultiShipmentBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var MultiShipmentRequest
     */
    public $request;

    /**
     * Constructor method for CreateMultiShipmentBc
     *
     * @uses CreateMultiShipmentBc::setRequest()
     */
    public function __construct(?MultiShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return MultiShipmentRequest|null
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
    public function setRequest(?MultiShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
