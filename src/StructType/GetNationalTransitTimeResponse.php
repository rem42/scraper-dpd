<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTimeResponse StructType
 */
class GetNationalTransitTimeResponse extends AbstractStructBase
{
    /**
     * The TransitTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $TransitTime;
    /**
     * The GetNationalTransitTimeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var self
     */
    public $GetNationalTransitTimeResult;

    /**
     * Constructor method for GetNationalTransitTimeResponse
     *
     * @uses GetNationalTransitTimeResponse::setTransitTime()
     * @uses GetNationalTransitTimeResponse::setGetNationalTransitTimeResult()
     *
     * @param int $transitTime
     */
    public function __construct($transitTime = null, ?self $getNationalTransitTimeResult = null)
    {
        $this
            ->setTransitTime($transitTime)
            ->setGetNationalTransitTimeResult($getNationalTransitTimeResult)
        ;
    }

    /**
     * Get TransitTime value
     *
     * @return int
     */
    public function getTransitTime()
    {
        return $this->TransitTime;
    }

    /**
     * Set TransitTime value
     *
     * @param int $transitTime
     *
     * @return self
     */
    public function setTransitTime($transitTime = null)
    {
        // validation for constraint: int
        if (null !== $transitTime && !(\is_int($transitTime) || ctype_digit($transitTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transitTime, true), \gettype($transitTime)), __LINE__);
        }
        $this->TransitTime = $transitTime;
        return $this;
    }

    /**
     * Get GetNationalTransitTimeResult value
     *
     * @return self|null
     */
    public function getGetNationalTransitTimeResult()
    {
        return $this->GetNationalTransitTimeResult;
    }

    /**
     * Set GetNationalTransitTimeResult value
     *
     * @return self
     */
    public function setGetNationalTransitTimeResult(?self $getNationalTransitTimeResult = null)
    {
        $this->GetNationalTransitTimeResult = $getNationalTransitTimeResult;
        return $this;
    }
}
