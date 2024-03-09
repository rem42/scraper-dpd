<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Address StructType
 */
class Address extends AddressMini
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $name;
    /**
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $phoneNumber;
    /**
     * The faxNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $faxNumber;
    /**
     * The geoX
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $geoX;
    /**
     * The geoY
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $geoY;

    /**
     * Constructor method for Address
     *
     * @uses Address::setName()
     * @uses Address::setPhoneNumber()
     * @uses Address::setFaxNumber()
     * @uses Address::setGeoX()
     * @uses Address::setGeoY()
     *
     * @param string $name
     * @param string $phoneNumber
     * @param string $faxNumber
     * @param string $geoX
     * @param string $geoY
     */
    public function __construct($name = null, $phoneNumber = null, $faxNumber = null, $geoX = null, $geoY = null)
    {
        $this
            ->setName($name)
            ->setPhoneNumber($phoneNumber)
            ->setFaxNumber($faxNumber)
            ->setGeoX($geoX)
            ->setGeoY($geoY)
        ;
    }

    /**
     * Get name value
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name value
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
        $this->name = $name;
        return $this;
    }

    /**
     * Get phoneNumber value
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set phoneNumber value
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
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Get faxNumber value
     *
     * @return string|null
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Set faxNumber value
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
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * Get geoX value
     *
     * @return string|null
     */
    public function getGeoX()
    {
        return $this->geoX;
    }

    /**
     * Set geoX value
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
        $this->geoX = $geoX;
        return $this;
    }

    /**
     * Get geoY value
     *
     * @return string|null
     */
    public function getGeoY()
    {
        return $this->geoY;
    }

    /**
     * Set geoY value
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
        $this->geoY = $geoY;
        return $this;
    }
}
