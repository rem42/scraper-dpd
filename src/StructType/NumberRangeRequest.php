<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeRequest StructType
 */
class NumberRangeRequest extends NumberRangeBaseRequest
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
     * - minOccurs: 0
     *
     * @var string
     */
    public $ShippingCenterNumber;
    /**
     * The NumberRangeFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $NumberRangeFrom;
    /**
     * The NumberRangeTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $NumberRangeTo;
    /**
     * The NumberRangeFree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $NumberRangeFree;
    /**
     * The NumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $NumberType;

    /**
     * Constructor method for NumberRangeRequest
     *
     * @uses NumberRangeRequest::setCountryCode()
     * @uses NumberRangeRequest::setShippingCenterNumber()
     * @uses NumberRangeRequest::setNumberRangeFrom()
     * @uses NumberRangeRequest::setNumberRangeTo()
     * @uses NumberRangeRequest::setNumberRangeFree()
     * @uses NumberRangeRequest::setNumberType()
     *
     * @param int    $countryCode
     * @param string $shippingCenterNumber
     * @param string $numberRangeFrom
     * @param string $numberRangeTo
     * @param string $numberRangeFree
     * @param string $numberType
     */
    public function __construct($countryCode = null, $shippingCenterNumber = null, $numberRangeFrom = null, $numberRangeTo = null, $numberRangeFree = null, $numberType = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setShippingCenterNumber($shippingCenterNumber)
            ->setNumberRangeFrom($numberRangeFrom)
            ->setNumberRangeTo($numberRangeTo)
            ->setNumberRangeFree($numberRangeFree)
            ->setNumberType($numberType)
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
     * @return string|null
     */
    public function getShippingCenterNumber()
    {
        return $this->ShippingCenterNumber;
    }

    /**
     * Set ShippingCenterNumber value
     *
     * @param string $shippingCenterNumber
     *
     * @return self
     */
    public function setShippingCenterNumber($shippingCenterNumber = null)
    {
        // validation for constraint: string
        if (null !== $shippingCenterNumber && !\is_string($shippingCenterNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCenterNumber, true), \gettype($shippingCenterNumber)), __LINE__);
        }
        $this->ShippingCenterNumber = $shippingCenterNumber;
        return $this;
    }

    /**
     * Get NumberRangeFrom value
     *
     * @return string|null
     */
    public function getNumberRangeFrom()
    {
        return $this->NumberRangeFrom;
    }

    /**
     * Set NumberRangeFrom value
     *
     * @param string $numberRangeFrom
     *
     * @return self
     */
    public function setNumberRangeFrom($numberRangeFrom = null)
    {
        // validation for constraint: string
        if (null !== $numberRangeFrom && !\is_string($numberRangeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeFrom, true), \gettype($numberRangeFrom)), __LINE__);
        }
        $this->NumberRangeFrom = $numberRangeFrom;
        return $this;
    }

    /**
     * Get NumberRangeTo value
     *
     * @return string|null
     */
    public function getNumberRangeTo()
    {
        return $this->NumberRangeTo;
    }

    /**
     * Set NumberRangeTo value
     *
     * @param string $numberRangeTo
     *
     * @return self
     */
    public function setNumberRangeTo($numberRangeTo = null)
    {
        // validation for constraint: string
        if (null !== $numberRangeTo && !\is_string($numberRangeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeTo, true), \gettype($numberRangeTo)), __LINE__);
        }
        $this->NumberRangeTo = $numberRangeTo;
        return $this;
    }

    /**
     * Get NumberRangeFree value
     *
     * @return string|null
     */
    public function getNumberRangeFree()
    {
        return $this->NumberRangeFree;
    }

    /**
     * Set NumberRangeFree value
     *
     * @param string $numberRangeFree
     *
     * @return self
     */
    public function setNumberRangeFree($numberRangeFree = null)
    {
        // validation for constraint: string
        if (null !== $numberRangeFree && !\is_string($numberRangeFree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeFree, true), \gettype($numberRangeFree)), __LINE__);
        }
        $this->NumberRangeFree = $numberRangeFree;
        return $this;
    }

    /**
     * Get NumberType value
     *
     * @return string|null
     */
    public function getNumberType()
    {
        return $this->NumberType;
    }

    /**
     * Set NumberType value
     *
     * @param string $numberType
     *
     * @return self
     */
    public function setNumberType($numberType = null)
    {
        // validation for constraint: string
        if (null !== $numberType && !\is_string($numberType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberType, true), \gettype($numberType)), __LINE__);
        }
        $this->NumberType = $numberType;
        return $this;
    }
}
