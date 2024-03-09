<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerProfile StructType
 */
class CustomerProfile extends AbstractStructBase
{
    /**
     * The Locked
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $Locked;
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
     * The Addresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress
     */
    public $Addresses;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService
     */
    public $Services;

    /**
     * Constructor method for CustomerProfile
     *
     * @uses CustomerProfile::setLocked()
     * @uses CustomerProfile::setCustomer()
     * @uses CustomerProfile::setAddresses()
     * @uses CustomerProfile::setServices()
     *
     * @param bool $locked
     */
    public function __construct($locked = null, ?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress $addresses = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService $services = null)
    {
        $this
            ->setLocked($locked)
            ->setCustomer($customer)
            ->setAddresses($addresses)
            ->setServices($services)
        ;
    }

    /**
     * Get Locked value
     *
     * @return bool
     */
    public function getLocked()
    {
        return $this->Locked;
    }

    /**
     * Set Locked value
     *
     * @param bool $locked
     *
     * @return self
     */
    public function setLocked($locked = null)
    {
        // validation for constraint: boolean
        if (null !== $locked && !\is_bool($locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), \gettype($locked)), __LINE__);
        }
        $this->Locked = $locked;
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
     * Get Addresses value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }

    /**
     * Set Addresses value
     *
     * @return self
     */
    public function setAddresses(?\Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }

    /**
     * Get Services value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService|null
     */
    public function getServices()
    {
        return $this->Services;
    }

    /**
     * Set Services value
     *
     * @return self
     */
    public function setServices(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService $services = null)
    {
        $this->Services = $services;
        return $this;
    }
}
