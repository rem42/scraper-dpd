<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTimeRequest StructType
 */
class GetNationalTransitTimeRequest extends AbstractStructBase
{
    /**
     * The SC_CountryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $SC_CountryCode;
    /**
     * The SC_CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $SC_CenterNumber;
    /**
     * The RC_CountryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $RC_CountryCode;
    /**
     * The RC_CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $RC_CenterNumber;
    /**
     * The TransitTime_Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $TransitTime_Type;

    /**
     * Constructor method for GetNationalTransitTimeRequest
     *
     * @uses GetNationalTransitTimeRequest::setSC_CountryCode()
     * @uses GetNationalTransitTimeRequest::setSC_CenterNumber()
     * @uses GetNationalTransitTimeRequest::setRC_CountryCode()
     * @uses GetNationalTransitTimeRequest::setRC_CenterNumber()
     * @uses GetNationalTransitTimeRequest::setTransitTime_Type()
     *
     * @param int    $sC_CountryCode
     * @param int    $sC_CenterNumber
     * @param int    $rC_CountryCode
     * @param int    $rC_CenterNumber
     * @param string $transitTime_Type
     */
    public function __construct($sC_CountryCode = null, $sC_CenterNumber = null, $rC_CountryCode = null, $rC_CenterNumber = null, $transitTime_Type = null)
    {
        $this
            ->setSC_CountryCode($sC_CountryCode)
            ->setSC_CenterNumber($sC_CenterNumber)
            ->setRC_CountryCode($rC_CountryCode)
            ->setRC_CenterNumber($rC_CenterNumber)
            ->setTransitTime_Type($transitTime_Type)
        ;
    }

    /**
     * Get SC_CountryCode value
     *
     * @return int
     */
    public function getSC_CountryCode()
    {
        return $this->SC_CountryCode;
    }

    /**
     * Set SC_CountryCode value
     *
     * @param int $sC_CountryCode
     *
     * @return self
     */
    public function setSC_CountryCode($sC_CountryCode = null)
    {
        // validation for constraint: int
        if (null !== $sC_CountryCode && !(\is_int($sC_CountryCode) || ctype_digit($sC_CountryCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sC_CountryCode, true), \gettype($sC_CountryCode)), __LINE__);
        }
        $this->SC_CountryCode = $sC_CountryCode;
        return $this;
    }

    /**
     * Get SC_CenterNumber value
     *
     * @return int
     */
    public function getSC_CenterNumber()
    {
        return $this->SC_CenterNumber;
    }

    /**
     * Set SC_CenterNumber value
     *
     * @param int $sC_CenterNumber
     *
     * @return self
     */
    public function setSC_CenterNumber($sC_CenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $sC_CenterNumber && !(\is_int($sC_CenterNumber) || ctype_digit($sC_CenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sC_CenterNumber, true), \gettype($sC_CenterNumber)), __LINE__);
        }
        $this->SC_CenterNumber = $sC_CenterNumber;
        return $this;
    }

    /**
     * Get RC_CountryCode value
     *
     * @return int
     */
    public function getRC_CountryCode()
    {
        return $this->RC_CountryCode;
    }

    /**
     * Set RC_CountryCode value
     *
     * @param int $rC_CountryCode
     *
     * @return self
     */
    public function setRC_CountryCode($rC_CountryCode = null)
    {
        // validation for constraint: int
        if (null !== $rC_CountryCode && !(\is_int($rC_CountryCode) || ctype_digit($rC_CountryCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rC_CountryCode, true), \gettype($rC_CountryCode)), __LINE__);
        }
        $this->RC_CountryCode = $rC_CountryCode;
        return $this;
    }

    /**
     * Get RC_CenterNumber value
     *
     * @return int
     */
    public function getRC_CenterNumber()
    {
        return $this->RC_CenterNumber;
    }

    /**
     * Set RC_CenterNumber value
     *
     * @param int $rC_CenterNumber
     *
     * @return self
     */
    public function setRC_CenterNumber($rC_CenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $rC_CenterNumber && !(\is_int($rC_CenterNumber) || ctype_digit($rC_CenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rC_CenterNumber, true), \gettype($rC_CenterNumber)), __LINE__);
        }
        $this->RC_CenterNumber = $rC_CenterNumber;
        return $this;
    }

    /**
     * Get TransitTime_Type value
     *
     * @return string
     */
    public function getTransitTime_Type()
    {
        return $this->TransitTime_Type;
    }

    /**
     * Set TransitTime_Type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\TransitTimeType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\TransitTimeType::getValidValues()
     *
     * @param string $transitTime_Type
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setTransitTime_Type($transitTime_Type = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\TransitTimeType::valueIsValid($transitTime_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\TransitTimeType', \is_array($transitTime_Type) ? implode(', ', $transitTime_Type) : var_export($transitTime_Type, true), implode(', ', \Scraper\ScraperDPD\EnumType\TransitTimeType::getValidValues())), __LINE__);
        }
        $this->TransitTime_Type = $transitTime_Type;
        return $this;
    }
}
