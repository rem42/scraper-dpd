<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsDeliverableOnDateResponse StructType
 */
class IsDeliverableOnDateResponse extends AbstractStructBase
{
    /**
     * The IsDeliverableOnDateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsDeliverableOnDateResult;

    /**
     * Constructor method for IsDeliverableOnDateResponse
     *
     * @uses IsDeliverableOnDateResponse::setIsDeliverableOnDateResult()
     *
     * @param bool $isDeliverableOnDateResult
     */
    public function __construct($isDeliverableOnDateResult = null)
    {
        $this
            ->setIsDeliverableOnDateResult($isDeliverableOnDateResult)
        ;
    }

    /**
     * Get IsDeliverableOnDateResult value
     *
     * @return bool
     */
    public function getIsDeliverableOnDateResult()
    {
        return $this->IsDeliverableOnDateResult;
    }

    /**
     * Set IsDeliverableOnDateResult value
     *
     * @param bool $isDeliverableOnDateResult
     *
     * @return self
     */
    public function setIsDeliverableOnDateResult($isDeliverableOnDateResult = null)
    {
        // validation for constraint: boolean
        if (null !== $isDeliverableOnDateResult && !\is_bool($isDeliverableOnDateResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliverableOnDateResult, true), \gettype($isDeliverableOnDateResult)), __LINE__);
        }
        $this->IsDeliverableOnDateResult = $isDeliverableOnDateResult;
        return $this;
    }
}
