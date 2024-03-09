<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPickableOnDateResponse StructType
 */
class IsPickableOnDateResponse extends AbstractStructBase
{
    /**
     * The IsPickableOnDateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsPickableOnDateResult;

    /**
     * Constructor method for IsPickableOnDateResponse
     *
     * @uses IsPickableOnDateResponse::setIsPickableOnDateResult()
     *
     * @param bool $isPickableOnDateResult
     */
    public function __construct($isPickableOnDateResult = null)
    {
        $this
            ->setIsPickableOnDateResult($isPickableOnDateResult)
        ;
    }

    /**
     * Get IsPickableOnDateResult value
     *
     * @return bool
     */
    public function getIsPickableOnDateResult()
    {
        return $this->IsPickableOnDateResult;
    }

    /**
     * Set IsPickableOnDateResult value
     *
     * @param bool $isPickableOnDateResult
     *
     * @return self
     */
    public function setIsPickableOnDateResult($isPickableOnDateResult = null)
    {
        // validation for constraint: boolean
        if (null !== $isPickableOnDateResult && !\is_bool($isPickableOnDateResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPickableOnDateResult, true), \gettype($isPickableOnDateResult)), __LINE__);
        }
        $this->IsPickableOnDateResult = $isPickableOnDateResult;
        return $this;
    }
}
