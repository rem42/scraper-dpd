<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerAddress StructType
 */
class CustomerAddress extends AbstractStructBase
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
     * The CustomerCenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $CustomerCenterNumber;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $CustomerNumber;
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
     * Constructor method for CustomerAddress
     *
     * @uses CustomerAddress::setCountryCode()
     * @uses CustomerAddress::setCustomerCenterNumber()
     * @uses CustomerAddress::setCustomerNumber()
     * @uses CustomerAddress::setTitle()
     * @uses CustomerAddress::setName0()
     * @uses CustomerAddress::setName1()
     * @uses CustomerAddress::setName2()
     * @uses CustomerAddress::setName3()
     * @uses CustomerAddress::setCountryPrefix()
     * @uses CustomerAddress::setZipCode()
     * @uses CustomerAddress::setCity()
     * @uses CustomerAddress::setStreet()
     * @uses CustomerAddress::setHouseNumber()
     * @uses CustomerAddress::setHouseNumberExtension()
     * @uses CustomerAddress::setFloor()
     * @uses CustomerAddress::setPostOfficeBox()
     * @uses CustomerAddress::setPhoneNumber()
     * @uses CustomerAddress::setFaxNumber()
     * @uses CustomerAddress::setMobileNumber()
     * @uses CustomerAddress::setEmail()
     *
     * @param int    $countryCode
     * @param int    $customerCenterNumber
     * @param int    $customerNumber
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
     */
    public function __construct($countryCode = null, $customerCenterNumber = null, $customerNumber = null, $title = null, $name0 = null, $name1 = null, $name2 = null, $name3 = null, $countryPrefix = null, $zipCode = null, $city = null, $street = null, $houseNumber = null, $houseNumberExtension = null, $floor = null, $postOfficeBox = null, $phoneNumber = null, $faxNumber = null, $mobileNumber = null, $email = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
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
     * Get CustomerCenterNumber value
     *
     * @return int
     */
    public function getCustomerCenterNumber()
    {
        return $this->CustomerCenterNumber;
    }

    /**
     * Set CustomerCenterNumber value
     *
     * @param int $customerCenterNumber
     *
     * @return self
     */
    public function setCustomerCenterNumber($customerCenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $customerCenterNumber && !(\is_int($customerCenterNumber) || ctype_digit($customerCenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerCenterNumber, true), \gettype($customerCenterNumber)), __LINE__);
        }
        $this->CustomerCenterNumber = $customerCenterNumber;
        return $this;
    }

    /**
     * Get CustomerNumber value
     *
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * Set CustomerNumber value
     *
     * @param int $customerNumber
     *
     * @return self
     */
    public function setCustomerNumber($customerNumber = null)
    {
        // validation for constraint: int
        if (null !== $customerNumber && !(\is_int($customerNumber) || ctype_digit($customerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerNumber, true), \gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;
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
}
