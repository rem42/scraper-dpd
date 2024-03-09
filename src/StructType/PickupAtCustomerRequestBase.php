<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerRequestBase StructType
 */
class PickupAtCustomerRequestBase extends AbstractStructBase
{
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $shipperaddress;
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
     * The pick_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $pick_date;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var PickupData
     */
    public $data;

    /**
     * Constructor method for PickupAtCustomerRequestBase
     *
     * @uses PickupAtCustomerRequestBase::setShipperaddress()
     * @uses PickupAtCustomerRequestBase::setCustomer()
     * @uses PickupAtCustomerRequestBase::setPick_date()
     * @uses PickupAtCustomerRequestBase::setData()
     *
     * @param string $pick_date
     */
    public function __construct(?Address $shipperaddress = null, ?Customer $customer = null, $pick_date = null, ?PickupData $data = null)
    {
        $this
            ->setShipperaddress($shipperaddress)
            ->setCustomer($customer)
            ->setPick_date($pick_date)
            ->setData($data)
        ;
    }

    /**
     * Get shipperaddress value
     *
     * @return Address|null
     */
    public function getShipperaddress()
    {
        return $this->shipperaddress;
    }

    /**
     * Set shipperaddress value
     *
     * @return self
     */
    public function setShipperaddress(?Address $shipperaddress = null)
    {
        $this->shipperaddress = $shipperaddress;
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

    /**
     * Get pick_date value
     *
     * @return string|null
     */
    public function getPick_date()
    {
        return $this->pick_date;
    }

    /**
     * Set pick_date value
     *
     * @param string $pick_date
     *
     * @return self
     */
    public function setPick_date($pick_date = null)
    {
        // validation for constraint: string
        if (null !== $pick_date && !\is_string($pick_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_date, true), \gettype($pick_date)), __LINE__);
        }
        $this->pick_date = $pick_date;
        return $this;
    }

    /**
     * Get data value
     *
     * @return PickupData|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set data value
     *
     * @return self
     */
    public function setData(?PickupData $data = null)
    {
        $this->data = $data;
        return $this;
    }
}
