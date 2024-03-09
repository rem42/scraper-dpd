<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateNumberRangeRequest StructType
 */
class TerminateNumberRangeRequest extends TerminateNumberRangeBaseRequest
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $CountryCode;
    /**
     * The ShippingCenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $ShippingCenterNumber;

    /**
     * Constructor method for TerminateNumberRangeRequest
     *
     * @uses TerminateNumberRangeRequest::setCountryCode()
     * @uses TerminateNumberRangeRequest::setShippingCenterNumber()
     *
     * @param int $countryCode
     * @param int $shippingCenterNumber
     */
    public function __construct($countryCode = null, $shippingCenterNumber = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setShippingCenterNumber($shippingCenterNumber)
        ;
    }

    /**
     * Get CountryCode value
     *
     * @return int
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Set CountryCode value
     *
     * @param int $countryCode
     *
     * @return self
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: int
        if (null !== $countryCode && !(\is_int($countryCode) || ctype_digit($countryCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryCode, true), \gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }

    /**
     * Get ShippingCenterNumber value
     *
     * @return int
     */
    public function getShippingCenterNumber()
    {
        return $this->ShippingCenterNumber;
    }

    /**
     * Set ShippingCenterNumber value
     *
     * @param int $shippingCenterNumber
     *
     * @return self
     */
    public function setShippingCenterNumber($shippingCenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $shippingCenterNumber && !(\is_int($shippingCenterNumber) || ctype_digit($shippingCenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingCenterNumber, true), \gettype($shippingCenterNumber)), __LINE__);
        }
        $this->ShippingCenterNumber = $shippingCenterNumber;
        return $this;
    }
}
