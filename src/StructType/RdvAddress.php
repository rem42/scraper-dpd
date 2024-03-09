<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvAddress StructType
 */
class RdvAddress extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Name;
    /**
     * The CountryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CountryPrefix;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ZipCode;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $City;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Street;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PhoneNumber;
    /**
     * The GeoCoord_Y
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $GeoCoord_Y;
    /**
     * The GeoCoord_X
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $GeoCoord_X;

    /**
     * Constructor method for RdvAddress
     *
     * @uses RdvAddress::setName()
     * @uses RdvAddress::setCountryPrefix()
     * @uses RdvAddress::setZipCode()
     * @uses RdvAddress::setCity()
     * @uses RdvAddress::setStreet()
     * @uses RdvAddress::setPhoneNumber()
     * @uses RdvAddress::setGeoCoord_Y()
     * @uses RdvAddress::setGeoCoord_X()
     *
     * @param string $name
     * @param string $countryPrefix
     * @param string $zipCode
     * @param string $city
     * @param string $street
     * @param string $phoneNumber
     * @param string $geoCoord_Y
     * @param string $geoCoord_X
     */
    public function __construct($name = null, $countryPrefix = null, $zipCode = null, $city = null, $street = null, $phoneNumber = null, $geoCoord_Y = null, $geoCoord_X = null)
    {
        $this
            ->setName($name)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setStreet($street)
            ->setPhoneNumber($phoneNumber)
            ->setGeoCoord_Y($geoCoord_Y)
            ->setGeoCoord_X($geoCoord_X)
        ;
    }

    /**
     * Get Name value
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Name value
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }

    /**
     * Get CountryPrefix value
     *
     * @return string|null
     */
    public function getCountryPrefix()
    {
        return $this->CountryPrefix;
    }

    /**
     * Set CountryPrefix value
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
        $this->CountryPrefix = $countryPrefix;
        return $this;
    }

    /**
     * Get ZipCode value
     *
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Set ZipCode value
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
        $this->ZipCode = $zipCode;
        return $this;
    }

    /**
     * Get City value
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set City value
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (null !== $city && !\is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), \gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }

    /**
     * Get Street value
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * Set Street value
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (null !== $street && !\is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), \gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }

    /**
     * Get PhoneNumber value
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * Set PhoneNumber value
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (null !== $phoneNumber && !\is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), \gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Get GeoCoord_Y value
     *
     * @return string|null
     */
    public function getGeoCoord_Y()
    {
        return $this->GeoCoord_Y;
    }

    /**
     * Set GeoCoord_Y value
     *
     * @param string $geoCoord_Y
     *
     * @return self
     */
    public function setGeoCoord_Y($geoCoord_Y = null)
    {
        // validation for constraint: string
        if (null !== $geoCoord_Y && !\is_string($geoCoord_Y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoCoord_Y, true), \gettype($geoCoord_Y)), __LINE__);
        }
        $this->GeoCoord_Y = $geoCoord_Y;
        return $this;
    }

    /**
     * Get GeoCoord_X value
     *
     * @return string|null
     */
    public function getGeoCoord_X()
    {
        return $this->GeoCoord_X;
    }

    /**
     * Set GeoCoord_X value
     *
     * @param string $geoCoord_X
     *
     * @return self
     */
    public function setGeoCoord_X($geoCoord_X = null)
    {
        // validation for constraint: string
        if (null !== $geoCoord_X && !\is_string($geoCoord_X)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoCoord_X, true), \gettype($geoCoord_X)), __LINE__);
        }
        $this->GeoCoord_X = $geoCoord_X;
        return $this;
    }
}
