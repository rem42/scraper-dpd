<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Customer StructType
 */
class Customer extends CustomerSmall
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $countrycode;

    /**
     * Constructor method for Customer
     *
     * @uses Customer::setCountrycode()
     *
     * @param int $countrycode
     */
    public function __construct($countrycode = null)
    {
        $this
            ->setCountrycode($countrycode)
        ;
    }

    /**
     * Get countrycode value
     *
     * @return int
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Set countrycode value
     *
     * @param int $countrycode
     *
     * @return self
     */
    public function setCountrycode($countrycode = null)
    {
        // validation for constraint: int
        if (null !== $countrycode && !(\is_int($countrycode) || ctype_digit($countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countrycode, true), \gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;
        return $this;
    }
}
