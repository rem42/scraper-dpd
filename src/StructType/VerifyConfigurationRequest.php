<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyConfigurationRequest StructType
 */
class VerifyConfigurationRequest extends AbstractStructBase
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $customer;
    /**
     * The ip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ip;

    /**
     * Constructor method for VerifyConfigurationRequest
     *
     * @uses VerifyConfigurationRequest::setCustomer()
     * @uses VerifyConfigurationRequest::setIp()
     *
     * @param string $ip
     */
    public function __construct(?Customer $customer = null, $ip = null)
    {
        $this
            ->setCustomer($customer)
            ->setIp($ip)
        ;
    }

    /**
     * Get customer value
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set customer value
     *
     * @return self
     */
    public function setCustomer(?Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get ip value
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set ip value
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp($ip = null)
    {
        // validation for constraint: string
        if (null !== $ip && !\is_string($ip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), \gettype($ip)), __LINE__);
        }
        $this->ip = $ip;
        return $this;
    }
}
