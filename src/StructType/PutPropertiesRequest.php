<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutPropertiesRequest StructType
 */
class PutPropertiesRequest extends AbstractStructBase
{
    /**
     * The ShipperNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $ShipperNumber;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $Customer;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $HardwareId;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Options;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry
     */
    public $Properties;
    /**
     * The Sum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Sum;

    /**
     * Constructor method for PutPropertiesRequest
     *
     * @uses PutPropertiesRequest::setShipperNumber()
     * @uses PutPropertiesRequest::setCustomer()
     * @uses PutPropertiesRequest::setHardwareId()
     * @uses PutPropertiesRequest::setOptions()
     * @uses PutPropertiesRequest::setProperties()
     * @uses PutPropertiesRequest::setSum()
     *
     * @param int    $shipperNumber
     * @param string $hardwareId
     * @param string $options
     * @param string $sum
     */
    public function __construct($shipperNumber = null, ?Customer $customer = null, $hardwareId = null, $options = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry $properties = null, $sum = null)
    {
        $this
            ->setShipperNumber($shipperNumber)
            ->setCustomer($customer)
            ->setHardwareId($hardwareId)
            ->setOptions($options)
            ->setProperties($properties)
            ->setSum($sum)
        ;
    }

    /**
     * Get ShipperNumber value
     *
     * @return int
     */
    public function getShipperNumber()
    {
        return $this->ShipperNumber;
    }

    /**
     * Set ShipperNumber value
     *
     * @param int $shipperNumber
     *
     * @return self
     */
    public function setShipperNumber($shipperNumber = null)
    {
        // validation for constraint: int
        if (null !== $shipperNumber && !(\is_int($shipperNumber) || ctype_digit($shipperNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperNumber, true), \gettype($shipperNumber)), __LINE__);
        }
        $this->ShipperNumber = $shipperNumber;
        return $this;
    }

    /**
     * Get Customer value
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     *
     * @return self
     */
    public function setCustomer(?Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }

    /**
     * Get HardwareId value
     *
     * @return string|null
     */
    public function getHardwareId()
    {
        return $this->HardwareId;
    }

    /**
     * Set HardwareId value
     *
     * @param string $hardwareId
     *
     * @return self
     */
    public function setHardwareId($hardwareId = null)
    {
        // validation for constraint: string
        if (null !== $hardwareId && !\is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), \gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;
        return $this;
    }

    /**
     * Get Options value
     *
     * @return string|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * Set Options value
     *
     * @param string $options
     *
     * @return self
     */
    public function setOptions($options = null)
    {
        // validation for constraint: string
        if (null !== $options && !\is_string($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($options, true), \gettype($options)), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }

    /**
     * Get Properties value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }

    /**
     * Set Properties value
     *
     * @return self
     */
    public function setProperties(?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }

    /**
     * Get Sum value
     *
     * @return string|null
     */
    public function getSum()
    {
        return $this->Sum;
    }

    /**
     * Set Sum value
     *
     * @param string $sum
     *
     * @return self
     */
    public function setSum($sum = null)
    {
        // validation for constraint: string
        if (null !== $sum && !\is_string($sum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sum, true), \gettype($sum)), __LINE__);
        }
        $this->Sum = $sum;
        return $this;
    }
}
