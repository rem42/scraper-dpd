<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingRequest StructType
 */
class GetShippingRequest extends AbstractStructBase
{
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $date;
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
     * Constructor method for GetShippingRequest
     *
     * @uses GetShippingRequest::setDate()
     * @uses GetShippingRequest::setCustomer()
     *
     * @param string $date
     */
    public function __construct($date = null, ?Customer $customer = null)
    {
        $this
            ->setDate($date)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get date value
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date value
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
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
}
