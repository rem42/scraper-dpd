<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBc StructType
 */
class GetRetourShipmentDataBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RetourShipmentBcRequest
     */
    public $request;

    /**
     * Constructor method for GetRetourShipmentDataBc
     *
     * @uses GetRetourShipmentDataBc::setRequest()
     */
    public function __construct(?RetourShipmentBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return RetourShipmentBcRequest|null
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
    public function setRequest(?RetourShipmentBcRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
