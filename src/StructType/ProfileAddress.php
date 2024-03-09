<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileAddress StructType
 */
class ProfileAddress extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $Type;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Priority;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Title;
    /**
     * The Name0
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Name0;
    /**
     * The Name1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Name1;
    /**
     * The Name2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Name2;
    /**
     * The Name3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Name3;
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
     * The HouseNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $HouseNumber;
    /**
     * The HouseNumberExtension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $HouseNumberExtension;
    /**
     * The Floor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Floor;
    /**
     * The PostOfficeBox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PostOfficeBox;
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
     * The FaxNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $FaxNumber;
    /**
     * The MobileNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MobileNumber;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Email;
    /**
     * The GeoX
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $GeoX;
    /**
     * The GeoY
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $GeoY;

    /**
     * Constructor method for ProfileAddress
     *
     * @uses ProfileAddress::setType()
     * @uses ProfileAddress::setPriority()
     * @uses ProfileAddress::setTitle()
     * @uses ProfileAddress::setName0()
     * @uses ProfileAddress::setName1()
     * @uses ProfileAddress::setName2()
     * @uses ProfileAddress::setName3()
     * @uses ProfileAddress::setCountryPrefix()
     * @uses ProfileAddress::setZipCode()
     * @uses ProfileAddress::setCity()
     * @uses ProfileAddress::setStreet()
     * @uses ProfileAddress::setHouseNumber()
     * @uses ProfileAddress::setHouseNumberExtension()
     * @uses ProfileAddress::setFloor()
     * @uses ProfileAddress::setPostOfficeBox()
     * @uses ProfileAddress::setPhoneNumber()
     * @uses ProfileAddress::setFaxNumber()
     * @uses ProfileAddress::setMobileNumber()
     * @uses ProfileAddress::setEmail()
     * @uses ProfileAddress::setGeoX()
     * @uses ProfileAddress::setGeoY()
     *
     * @param string $type
     * @param int    $priority
     * @param string $title
     * @param string $name0
     * @param string $name1
     * @param string $name2
     * @param string $name3
     * @param string $countryPrefix
     * @param string $zipCode
     * @param string $city
     * @param string $street
     * @param string $houseNumber
     * @param string $houseNumberExtension
     * @param string $floor
     * @param string $postOfficeBox
     * @param string $phoneNumber
     * @param string $faxNumber
     * @param string $mobileNumber
     * @param string $email
     * @param string $geoX
     * @param string $geoY
     */
    public function __construct($type = null, $priority = null, $title = null, $name0 = null, $name1 = null, $name2 = null, $name3 = null, $countryPrefix = null, $zipCode = null, $city = null, $street = null, $houseNumber = null, $houseNumberExtension = null, $floor = null, $postOfficeBox = null, $phoneNumber = null, $faxNumber = null, $mobileNumber = null, $email = null, $geoX = null, $geoY = null)
    {
        $this
            ->setType($type)
            ->setPriority($priority)
            ->setTitle($title)
            ->setName0($name0)
            ->setName1($name1)
            ->setName2($name2)
            ->setName3($name3)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setHouseNumberExtension($houseNumberExtension)
            ->setFloor($floor)
            ->setPostOfficeBox($postOfficeBox)
            ->setPhoneNumber($phoneNumber)
            ->setFaxNumber($faxNumber)
            ->setMobileNumber($mobileNumber)
            ->setEmail($email)
            ->setGeoX($geoX)
            ->setGeoY($geoY)
        ;
    }

    /**
     * Get Type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\AddressType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\AddressType::getValidValues()
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
        if (!\Scraper\ScraperDPD\EnumType\AddressType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\AddressType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\AddressType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }

    /**
     * Get Priority value
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }

    /**
     * Set Priority value
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (null !== $priority && !(\is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), \gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }

    /**
     * Get Title value
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Set Title value
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (null !== $title && !\is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), \gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }

    /**
     * Get Name0 value
     *
     * @return string|null
     */
    public function getName0()
    {
        return $this->Name0;
    }

    /**
     * Set Name0 value
     *
     * @param string $name0
     *
     * @return self
     */
    public function setName0($name0 = null)
    {
        // validation for constraint: string
        if (null !== $name0 && !\is_string($name0)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name0, true), \gettype($name0)), __LINE__);
        }
        $this->Name0 = $name0;
        return $this;
    }

    /**
     * Get Name1 value
     *
     * @return string|null
     */
    public function getName1()
    {
        return $this->Name1;
    }

    /**
     * Set Name1 value
     *
     * @param string $name1
     *
     * @return self
     */
    public function setName1($name1 = null)
    {
        // validation for constraint: string
        if (null !== $name1 && !\is_string($name1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name1, true), \gettype($name1)), __LINE__);
        }
        $this->Name1 = $name1;
        return $this;
    }

    /**
     * Get Name2 value
     *
     * @return string|null
     */
    public function getName2()
    {
        return $this->Name2;
    }

    /**
     * Set Name2 value
     *
     * @param string $name2
     *
     * @return self
     */
    public function setName2($name2 = null)
    {
        // validation for constraint: string
        if (null !== $name2 && !\is_string($name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), \gettype($name2)), __LINE__);
        }
        $this->Name2 = $name2;
        return $this;
    }

    /**
     * Get Name3 value
     *
     * @return string|null
     */
    public function getName3()
    {
        return $this->Name3;
    }

    /**
     * Set Name3 value
     *
     * @param string $name3
     *
     * @return self
     */
    public function setName3($name3 = null)
    {
        // validation for constraint: string
        if (null !== $name3 && !\is_string($name3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name3, true), \gettype($name3)), __LINE__);
        }
        $this->Name3 = $name3;
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
     * Get HouseNumber value
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * Set HouseNumber value
     *
     * @param string $houseNumber
     *
     * @return self
     */
    public function setHouseNumber($houseNumber = null)
    {
        // validation for constraint: string
        if (null !== $houseNumber && !\is_string($houseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($houseNumber, true), \gettype($houseNumber)), __LINE__);
        }
        $this->HouseNumber = $houseNumber;
        return $this;
    }

    /**
     * Get HouseNumberExtension value
     *
     * @return string|null
     */
    public function getHouseNumberExtension()
    {
        return $this->HouseNumberExtension;
    }

    /**
     * Set HouseNumberExtension value
     *
     * @param string $houseNumberExtension
     *
     * @return self
     */
    public function setHouseNumberExtension($houseNumberExtension = null)
    {
        // validation for constraint: string
        if (null !== $houseNumberExtension && !\is_string($houseNumberExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($houseNumberExtension, true), \gettype($houseNumberExtension)), __LINE__);
        }
        $this->HouseNumberExtension = $houseNumberExtension;
        return $this;
    }

    /**
     * Get Floor value
     *
     * @return string|null
     */
    public function getFloor()
    {
        return $this->Floor;
    }

    /**
     * Set Floor value
     *
     * @param string $floor
     *
     * @return self
     */
    public function setFloor($floor = null)
    {
        // validation for constraint: string
        if (null !== $floor && !\is_string($floor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floor, true), \gettype($floor)), __LINE__);
        }
        $this->Floor = $floor;
        return $this;
    }

    /**
     * Get PostOfficeBox value
     *
     * @return string|null
     */
    public function getPostOfficeBox()
    {
        return $this->PostOfficeBox;
    }

    /**
     * Set PostOfficeBox value
     *
     * @param string $postOfficeBox
     *
     * @return self
     */
    public function setPostOfficeBox($postOfficeBox = null)
    {
        // validation for constraint: string
        if (null !== $postOfficeBox && !\is_string($postOfficeBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), \gettype($postOfficeBox)), __LINE__);
        }
        $this->PostOfficeBox = $postOfficeBox;
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
     * Get FaxNumber value
     *
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }

    /**
     * Set FaxNumber value
     *
     * @param string $faxNumber
     *
     * @return self
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: string
        if (null !== $faxNumber && !\is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faxNumber, true), \gettype($faxNumber)), __LINE__);
        }
        $this->FaxNumber = $faxNumber;
        return $this;
    }

    /**
     * Get MobileNumber value
     *
     * @return string|null
     */
    public function getMobileNumber()
    {
        return $this->MobileNumber;
    }

    /**
     * Set MobileNumber value
     *
     * @param string $mobileNumber
     *
     * @return self
     */
    public function setMobileNumber($mobileNumber = null)
    {
        // validation for constraint: string
        if (null !== $mobileNumber && !\is_string($mobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileNumber, true), \gettype($mobileNumber)), __LINE__);
        }
        $this->MobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * Get Email value
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Email value
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (null !== $email && !\is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), \gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }

    /**
     * Get GeoX value
     *
     * @return string|null
     */
    public function getGeoX()
    {
        return $this->GeoX;
    }

    /**
     * Set GeoX value
     *
     * @param string $geoX
     *
     * @return self
     */
    public function setGeoX($geoX = null)
    {
        // validation for constraint: string
        if (null !== $geoX && !\is_string($geoX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoX, true), \gettype($geoX)), __LINE__);
        }
        $this->GeoX = $geoX;
        return $this;
    }

    /**
     * Get GeoY value
     *
     * @return string|null
     */
    public function getGeoY()
    {
        return $this->GeoY;
    }

    /**
     * Set GeoY value
     *
     * @param string $geoY
     *
     * @return self
     */
    public function setGeoY($geoY = null)
    {
        // validation for constraint: string
        if (null !== $geoY && !\is_string($geoY)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoY, true), \gettype($geoY)), __LINE__);
        }
        $this->GeoY = $geoY;
        return $this;
    }
}
