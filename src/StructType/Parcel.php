<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Parcel StructType
 */
class Parcel extends AbstractStructBase
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
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $centernumber;
    /**
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $parcelnumber;

    /**
     * Constructor method for Parcel
     *
     * @uses Parcel::setCountrycode()
     * @uses Parcel::setCenternumber()
     * @uses Parcel::setParcelnumber()
     *
     * @param int $countrycode
     * @param int $centernumber
     * @param int $parcelnumber
     */
    public function __construct($countrycode = null, $centernumber = null, $parcelnumber = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
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

    /**
     * Get centernumber value
     *
     * @return int
     */
    public function getCenternumber()
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     *
     * @param int $centernumber
     *
     * @return self
     */
    public function setCenternumber($centernumber = null)
    {
        // validation for constraint: int
        if (null !== $centernumber && !(\is_int($centernumber) || ctype_digit($centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;
        return $this;
    }

    /**
     * Get parcelnumber value
     *
     * @return int
     */
    public function getParcelnumber()
    {
        return $this->parcelnumber;
    }

    /**
     * Set parcelnumber value
     *
     * @param int $parcelnumber
     *
     * @return self
     */
    public function setParcelnumber($parcelnumber = null)
    {
        // validation for constraint: int
        if (null !== $parcelnumber && !(\is_int($parcelnumber) || ctype_digit($parcelnumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parcelnumber, true), \gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;
        return $this;
    }
}
