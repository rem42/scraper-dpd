<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeResponse StructType
 */
class NumberRangeResponse extends NumberRangeBaseResponse
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
     * The CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $CenterNumber;

    /**
     * Constructor method for NumberRangeResponse
     *
     * @uses NumberRangeResponse::setCountryCode()
     * @uses NumberRangeResponse::setCenterNumber()
     *
     * @param int $countryCode
     * @param int $centerNumber
     */
    public function __construct($countryCode = null, $centerNumber = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setCenterNumber($centerNumber)
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
     * Get CenterNumber value
     *
     * @return int
     */
    public function getCenterNumber()
    {
        return $this->CenterNumber;
    }

    /**
     * Set CenterNumber value
     *
     * @param int $centerNumber
     *
     * @return self
     */
    public function setCenterNumber($centerNumber = null)
    {
        // validation for constraint: int
        if (null !== $centerNumber && !(\is_int($centerNumber) || ctype_digit($centerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centerNumber, true), \gettype($centerNumber)), __LINE__);
        }
        $this->CenterNumber = $centerNumber;
        return $this;
    }
}
