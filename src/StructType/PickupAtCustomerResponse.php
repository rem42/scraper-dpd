<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerResponse StructType
 */
class PickupAtCustomerResponse extends AbstractStructBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Sin;

    /**
     * Constructor method for PickupAtCustomerResponse
     *
     * @uses PickupAtCustomerResponse::setSin()
     *
     * @param int $sin
     */
    public function __construct($sin = null)
    {
        $this
            ->setSin($sin)
        ;
    }

    /**
     * Get Sin value
     *
     * @return int
     */
    public function getSin()
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     *
     * @param int $sin
     *
     * @return self
     */
    public function setSin($sin = null)
    {
        // validation for constraint: int
        if (null !== $sin && !(\is_int($sin) || ctype_digit($sin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;
        return $this;
    }
}
