<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingResponse StructType
 */
class GetGeoRoutingResponse extends AbstractStructBase
{
    /**
     * The GetGeoRoutingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GeoRouting
     */
    public $GetGeoRoutingResult;

    /**
     * Constructor method for GetGeoRoutingResponse
     *
     * @uses GetGeoRoutingResponse::setGetGeoRoutingResult()
     */
    public function __construct(?GeoRouting $getGeoRoutingResult = null)
    {
        $this
            ->setGetGeoRoutingResult($getGeoRoutingResult)
        ;
    }

    /**
     * Get GetGeoRoutingResult value
     *
     * @return GeoRouting|null
     */
    public function getGetGeoRoutingResult()
    {
        return $this->GetGeoRoutingResult;
    }

    /**
     * Set GetGeoRoutingResult value
     *
     * @return self
     */
    public function setGetGeoRoutingResult(?GeoRouting $getGeoRoutingResult = null)
    {
        $this->GetGeoRoutingResult = $getGeoRoutingResult;
        return $this;
    }
}
