<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMulti StructType
 */
class GetShipmentBcMulti extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetShipmentBcMultiRequest
     */
    public $request;

    /**
     * Constructor method for GetShipmentBcMulti
     *
     * @uses GetShipmentBcMulti::setRequest()
     */
    public function __construct(?GetShipmentBcMultiRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetShipmentBcMultiRequest|null
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
    public function setRequest(?GetShipmentBcMultiRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
