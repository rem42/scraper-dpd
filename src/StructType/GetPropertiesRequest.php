<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesRequest StructType
 */
class GetPropertiesRequest extends AbstractStructBase
{
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
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $Customer;
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Product;

    /**
     * Constructor method for GetPropertiesRequest
     *
     * @uses GetPropertiesRequest::setHardwareId()
     * @uses GetPropertiesRequest::setCustomer()
     * @uses GetPropertiesRequest::setProduct()
     *
     * @param string $hardwareId
     * @param string $product
     */
    public function __construct($hardwareId = null, ?Customer $customer = null, $product = null)
    {
        $this
            ->setHardwareId($hardwareId)
            ->setCustomer($customer)
            ->setProduct($product)
        ;
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
     * Get Product value
     *
     * @return string|null
     */
    public function getProduct()
    {
        return $this->Product;
    }

    /**
     * Set Product value
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct($product = null)
    {
        // validation for constraint: string
        if (null !== $product && !\is_string($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product, true), \gettype($product)), __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
}
