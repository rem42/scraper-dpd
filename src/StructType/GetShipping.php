<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipping StructType
 */
class GetShipping extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GetShippingRequest
     */
    public $request;

    /**
     * Constructor method for GetShipping
     *
     * @uses GetShipping::setRequest()
     */
    public function __construct(?GetShippingRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GetShippingRequest|null
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
    public function setRequest(?GetShippingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
