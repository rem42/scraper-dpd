<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 */
class Location extends AbstractStructBase
{
    /**
     * The TimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $TimeStamp;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $Latitude;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $Longitude;

    /**
     * Constructor method for Location
     *
     * @uses Location::setTimeStamp()
     * @uses Location::setLatitude()
     * @uses Location::setLongitude()
     *
     * @param string $timeStamp
     * @param float  $latitude
     * @param float  $longitude
     */
    public function __construct($timeStamp = null, $latitude = null, $longitude = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
        ;
    }

    /**
     * Get TimeStamp value
     *
     * @return string
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }

    /**
     * Set TimeStamp value
     *
     * @param string $timeStamp
     *
     * @return self
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (null !== $timeStamp && !\is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), \gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }

    /**
     * Get Latitude value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * Set Latitude value
     *
     * @param float $latitude
     *
     * @return self
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: float
        if (null !== $latitude && !(\is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), \gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;
        return $this;
    }

    /**
     * Get Longitude value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * Set Longitude value
     *
     * @param float $longitude
     *
     * @return self
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: float
        if (null !== $longitude && !(\is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), \gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;
        return $this;
    }
}
