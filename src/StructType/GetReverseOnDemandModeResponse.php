<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReverseOnDemandModeResponse StructType
 */
class GetReverseOnDemandModeResponse extends AbstractStructBase
{
    /**
     * The GetReverseOnDemandModeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $GetReverseOnDemandModeResult;

    /**
     * Constructor method for GetReverseOnDemandModeResponse
     *
     * @uses GetReverseOnDemandModeResponse::setGetReverseOnDemandModeResult()
     *
     * @param int $getReverseOnDemandModeResult
     */
    public function __construct($getReverseOnDemandModeResult = null)
    {
        $this
            ->setGetReverseOnDemandModeResult($getReverseOnDemandModeResult)
        ;
    }

    /**
     * Get GetReverseOnDemandModeResult value
     *
     * @return int
     */
    public function getGetReverseOnDemandModeResult()
    {
        return $this->GetReverseOnDemandModeResult;
    }

    /**
     * Set GetReverseOnDemandModeResult value
     *
     * @param int $getReverseOnDemandModeResult
     *
     * @return self
     */
    public function setGetReverseOnDemandModeResult($getReverseOnDemandModeResult = null)
    {
        // validation for constraint: int
        if (null !== $getReverseOnDemandModeResult && !(\is_int($getReverseOnDemandModeResult) || ctype_digit($getReverseOnDemandModeResult))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($getReverseOnDemandModeResult, true), \gettype($getReverseOnDemandModeResult)), __LINE__);
        }
        $this->GetReverseOnDemandModeResult = $getReverseOnDemandModeResult;
        return $this;
    }
}
