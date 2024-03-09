<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsCustomerBlockedResponse StructType
 */
class IsCustomerBlockedResponse extends AbstractStructBase
{
    /**
     * The IsCustomerBlockedResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsCustomerBlockedResult;

    /**
     * Constructor method for IsCustomerBlockedResponse
     *
     * @uses IsCustomerBlockedResponse::setIsCustomerBlockedResult()
     *
     * @param bool $isCustomerBlockedResult
     */
    public function __construct($isCustomerBlockedResult = null)
    {
        $this
            ->setIsCustomerBlockedResult($isCustomerBlockedResult)
        ;
    }

    /**
     * Get IsCustomerBlockedResult value
     *
     * @return bool
     */
    public function getIsCustomerBlockedResult()
    {
        return $this->IsCustomerBlockedResult;
    }

    /**
     * Set IsCustomerBlockedResult value
     *
     * @param bool $isCustomerBlockedResult
     *
     * @return self
     */
    public function setIsCustomerBlockedResult($isCustomerBlockedResult = null)
    {
        // validation for constraint: boolean
        if (null !== $isCustomerBlockedResult && !\is_bool($isCustomerBlockedResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerBlockedResult, true), \gettype($isCustomerBlockedResult)), __LINE__);
        }
        $this->IsCustomerBlockedResult = $isCustomerBlockedResult;
        return $this;
    }
}
