<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReceiveRetourLabelBcRequest StructType
 */
class ReceiveRetourLabelBcRequest extends ReceiveRetourLabelRequestBase
{
    /**
     * The shipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $shipmentNumber;
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
     * Constructor method for ReceiveRetourLabelBcRequest
     *
     * @uses ReceiveRetourLabelBcRequest::setShipmentNumber()
     * @uses ReceiveRetourLabelBcRequest::setCustomer()
     *
     * @param string $shipmentNumber
     */
    public function __construct($shipmentNumber = null, ?Customer $customer = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get shipmentNumber value
     *
     * @return string|null
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * Set shipmentNumber value
     *
     * @param string $shipmentNumber
     *
     * @return self
     */
    public function setShipmentNumber($shipmentNumber = null)
    {
        // validation for constraint: string
        if (null !== $shipmentNumber && !\is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), \gettype($shipmentNumber)), __LINE__);
        }
        $this->shipmentNumber = $shipmentNumber;
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
