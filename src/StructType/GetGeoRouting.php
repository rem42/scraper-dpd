<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRouting StructType
 */
class GetGeoRouting extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GeoRoutingRequest
     */
    public $request;

    /**
     * Constructor method for GetGeoRouting
     *
     * @uses GetGeoRouting::setRequest()
     */
    public function __construct(?GeoRoutingRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     *
     * @return GeoRoutingRequest|null
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
    public function setRequest(?GeoRoutingRequest $request = null)
    {
        $this->request = $request;
        return $this;
    }
}
