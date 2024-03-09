<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRoutingBaseRequest StructType
 */
class GeoRoutingBaseRequest extends AbstractStructBase
{
    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $destinationDepot;
    /**
     * The countryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $countryPrefix;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $zipCode;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $date;
    /**
     * The buCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $buCode;
    /**
     * The depotStr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $depotStr;

    /**
     * Constructor method for GeoRoutingBaseRequest
     *
     * @uses GeoRoutingBaseRequest::setDestinationDepot()
     * @uses GeoRoutingBaseRequest::setCountryPrefix()
     * @uses GeoRoutingBaseRequest::setZipCode()
     * @uses GeoRoutingBaseRequest::setDate()
     * @uses GeoRoutingBaseRequest::setBuCode()
     * @uses GeoRoutingBaseRequest::setDepotStr()
     *
     * @param int    $destinationDepot
     * @param string $countryPrefix
     * @param string $zipCode
     * @param string $date
     * @param string $buCode
     * @param string $depotStr
     */
    public function __construct($destinationDepot = null, $countryPrefix = null, $zipCode = null, $date = null, $buCode = null, $depotStr = null)
    {
        $this
            ->setDestinationDepot($destinationDepot)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setDate($date)
            ->setBuCode($buCode)
            ->setDepotStr($depotStr)
        ;
    }

    /**
     * Get destinationDepot value
     *
     * @return int
     */
    public function getDestinationDepot()
    {
        return $this->destinationDepot;
    }

    /**
     * Set destinationDepot value
     *
     * @param int $destinationDepot
     *
     * @return self
     */
    public function setDestinationDepot($destinationDepot = null)
    {
        // validation for constraint: int
        if (null !== $destinationDepot && !(\is_int($destinationDepot) || ctype_digit($destinationDepot))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationDepot, true), \gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;
        return $this;
    }

    /**
     * Get countryPrefix value
     *
     * @return string|null
     */
    public function getCountryPrefix()
    {
        return $this->countryPrefix;
    }

    /**
     * Set countryPrefix value
     *
     * @param string $countryPrefix
     *
     * @return self
     */
    public function setCountryPrefix($countryPrefix = null)
    {
        // validation for constraint: string
        if (null !== $countryPrefix && !\is_string($countryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefix, true), \gettype($countryPrefix)), __LINE__);
        }
        $this->countryPrefix = $countryPrefix;
        return $this;
    }

    /**
     * Get zipCode value
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value
     *
     * @param string $zipCode
     *
     * @return self
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (null !== $zipCode && !\is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), \gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Get date value
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date value
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Get buCode value
     *
     * @return string|null
     */
    public function getBuCode()
    {
        return $this->buCode;
    }

    /**
     * Set buCode value
     *
     * @param string $buCode
     *
     * @return self
     */
    public function setBuCode($buCode = null)
    {
        // validation for constraint: string
        if (null !== $buCode && !\is_string($buCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buCode, true), \gettype($buCode)), __LINE__);
        }
        $this->buCode = $buCode;
        return $this;
    }

    /**
     * Get depotStr value
     *
     * @return string|null
     */
    public function getDepotStr()
    {
        return $this->depotStr;
    }

    /**
     * Set depotStr value
     *
     * @param string $depotStr
     *
     * @return self
     */
    public function setDepotStr($depotStr = null)
    {
        // validation for constraint: string
        if (null !== $depotStr && !\is_string($depotStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depotStr, true), \gettype($depotStr)), __LINE__);
        }
        $this->depotStr = $depotStr;
        return $this;
    }
}
