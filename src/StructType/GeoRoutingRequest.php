<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GeoRoutingRequest StructType
 */
class GeoRoutingRequest extends GeoRoutingBaseRequest
{
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $serviceCode;

    /**
     * Constructor method for GeoRoutingRequest
     *
     * @uses GeoRoutingRequest::setServiceCode()
     *
     * @param string $serviceCode
     */
    public function __construct($serviceCode = null)
    {
        $this
            ->setServiceCode($serviceCode)
        ;
    }

    /**
     * Get serviceCode value
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Set serviceCode value
     *
     * @param string $serviceCode
     *
     * @return self
     */
    public function setServiceCode($serviceCode = null)
    {
        // validation for constraint: string
        if (null !== $serviceCode && !\is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), \gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        return $this;
    }
}
