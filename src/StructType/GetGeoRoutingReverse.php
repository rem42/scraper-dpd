<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingReverse StructType
 */
class GetGeoRoutingReverse extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GeoRoutingReverseRequest
     */
    public $request;

    /**
     * Constructor method for GetGeoRoutingReverse
     *
     * @uses GetGeoRoutingReverse::setRequest()
     */
    public function __construct(?GeoRoutingReverseRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GeoRoutingReverseRequest|null
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
    public function setRequest(?GeoRoutingReverseRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
