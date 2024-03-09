<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingReverseResponse StructType
 */
class GetGeoRoutingReverseResponse extends AbstractStructBase
{
    /**
     * The GetGeoRoutingReverseResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetGeoRoutingReverseResult;
    /**
     * The Reverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GeoRouting
     */
    public $Reverse;
    /**
     * The ReverseRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var GeoRouting
     */
    public $ReverseRetour;

    /**
     * Constructor method for GetGeoRoutingReverseResponse
     *
     * @uses GetGeoRoutingReverseResponse::setGetGeoRoutingReverseResult()
     * @uses GetGeoRoutingReverseResponse::setReverse()
     * @uses GetGeoRoutingReverseResponse::setReverseRetour()
     */
    public function __construct(?self $getGeoRoutingReverseResult = null, ?GeoRouting $reverse = null, ?GeoRouting $reverseRetour = null)
    {
        $this
            ->setGetGeoRoutingReverseResult($getGeoRoutingReverseResult)
            ->setReverse($reverse)
            ->setReverseRetour($reverseRetour)
        ;
    }

    /**
     * Get GetGeoRoutingReverseResult value
     *
     * @return self|null
     */
    public function getGetGeoRoutingReverseResult()
    {
        return $this->GetGeoRoutingReverseResult;
    }

    /**
     * Set GetGeoRoutingReverseResult value
     *
     * @return self
     */
    public function setGetGeoRoutingReverseResult(?self $getGeoRoutingReverseResult = null)
    {
        $this->GetGeoRoutingReverseResult = $getGeoRoutingReverseResult;
        return $this;
    }

    /**
     * Get Reverse value
     *
     * @return GeoRouting|null
     */
    public function getReverse()
    {
        return $this->Reverse;
    }

    /**
     * Set Reverse value
     *
     * @return self
     */
    public function setReverse(?GeoRouting $reverse = null)
    {
        $this->Reverse = $reverse;
        return $this;
    }

    /**
     * Get ReverseRetour value
     *
     * @return GeoRouting|null
     */
    public function getReverseRetour()
    {
        return $this->ReverseRetour;
    }

    /**
     * Set ReverseRetour value
     *
     * @return self
     */
    public function setReverseRetour(?GeoRouting $reverseRetour = null)
    {
        $this->ReverseRetour = $reverseRetour;
        return $this;
    }
}
