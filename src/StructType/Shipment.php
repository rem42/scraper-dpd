<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipment StructType
 */
class Shipment extends AbstractStructBase
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
     * The barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $barcode;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $type;

    /**
     * Constructor method for Shipment
     *
     * @uses Shipment::setCountrycode()
     * @uses Shipment::setCenternumber()
     * @uses Shipment::setParcelnumber()
     * @uses Shipment::setBarcode()
     * @uses Shipment::setType()
     *
     * @param int    $countrycode
     * @param int    $centernumber
     * @param int    $parcelnumber
     * @param int    $barcode
     * @param string $type
     */
    public function __construct($countrycode = null, $centernumber = null, $parcelnumber = null, $barcode = null, $type = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
            ->setBarcode($barcode)
            ->setType($type)
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

    /**
     * Get barcode value
     *
     * @return int
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set barcode value
     *
     * @param int $barcode
     *
     * @return self
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: int
        if (null !== $barcode && !(\is_int($barcode) || ctype_digit($barcode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\Etype::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\Etype::getValidValues()
     *
     * @param string $type
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\Etype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\Etype', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\Etype::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
