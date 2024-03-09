<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentData StructType
 */
class GetRetourShipmentData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RetourShipmentRequest
     */
    public $request;

    /**
     * Constructor method for GetRetourShipmentData
     *
     * @uses GetRetourShipmentData::setRequest()
     */
    public function __construct(?RetourShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return RetourShipmentRequest|null
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
    public function setRequest(?RetourShipmentRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
