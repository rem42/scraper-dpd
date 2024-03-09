<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for isAliveResponse StructType
 */
class IsAliveResponse extends AbstractStructBase
{
    /**
     * The isAliveResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $isAliveResult;

    /**
     * Constructor method for isAliveResponse
     *
     * @uses IsAliveResponse::setIsAliveResult()
     *
     * @param bool $isAliveResult
     */
    public function __construct($isAliveResult = null)
    {
        $this
            ->setIsAliveResult($isAliveResult)
        ;
    }

    /**
     * Get isAliveResult value
     *
     * @return bool
     */
    public function getIsAliveResult()
    {
        return $this->isAliveResult;
    }

    /**
     * Set isAliveResult value
     *
     * @param bool $isAliveResult
     *
     * @return self
     */
    public function setIsAliveResult($isAliveResult = null)
    {
        // validation for constraint: boolean
        if (null !== $isAliveResult && !\is_bool($isAliveResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAliveResult, true), \gettype($isAliveResult)), __LINE__);
        }
        $this->isAliveResult = $isAliveResult;
        return $this;
    }
}
