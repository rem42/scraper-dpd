<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for AddressIso2Name StructType
 */
class AddressIso2Name extends AddressName
{
    /**
     * The CountryPrefixIso2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CountryPrefixIso2;

    /**
     * Constructor method for AddressIso2Name
     *
     * @uses AddressIso2Name::setCountryPrefixIso2()
     *
     * @param string $countryPrefixIso2
     */
    public function __construct($countryPrefixIso2 = null)
    {
        $this
            ->setCountryPrefixIso2($countryPrefixIso2)
        ;
    }

    /**
     * Get CountryPrefixIso2 value
     *
     * @return string|null
     */
    public function getCountryPrefixIso2()
    {
        return $this->CountryPrefixIso2;
    }

    /**
     * Set CountryPrefixIso2 value
     *
     * @param string $countryPrefixIso2
     *
     * @return self
     */
    public function setCountryPrefixIso2($countryPrefixIso2 = null)
    {
        // validation for constraint: string
        if (null !== $countryPrefixIso2 && !\is_string($countryPrefixIso2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefixIso2, true), \gettype($countryPrefixIso2)), __LINE__);
        }
        $this->CountryPrefixIso2 = $countryPrefixIso2;
        return $this;
    }
}
