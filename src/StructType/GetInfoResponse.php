<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getInfoResponse StructType
 */
class GetInfoResponse extends AbstractStructBase
{
    /**
     * The getInfoResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $getInfoResult;

    /**
     * Constructor method for getInfoResponse
     *
     * @uses GetInfoResponse::setGetInfoResult()
     *
     * @param string $getInfoResult
     */
    public function __construct($getInfoResult = null)
    {
        $this
            ->setGetInfoResult($getInfoResult)
        ;
    }

    /**
     * Get getInfoResult value
     *
     * @return string|null
     */
    public function getGetInfoResult()
    {
        return $this->getInfoResult;
    }

    /**
     * Set getInfoResult value
     *
     * @param string $getInfoResult
     *
     * @return self
     */
    public function setGetInfoResult($getInfoResult = null)
    {
        // validation for constraint: string
        if (null !== $getInfoResult && !\is_string($getInfoResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getInfoResult, true), \gettype($getInfoResult)), __LINE__);
        }
        $this->getInfoResult = $getInfoResult;
        return $this;
    }
}
