<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourShipmentBcRequest StructType
 */
class RetourShipmentBcRequest extends RetourShipmentBaseRequest
{
    /**
     * The originalBarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var int
     */
    public $originalBarcodeSource;
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
     * The originalBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $originalBarcode;
    /**
     * The originalBarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $originalBarcodeId;

    /**
     * Constructor method for RetourShipmentBcRequest
     *
     * @uses RetourShipmentBcRequest::setOriginalBarcodeSource()
     * @uses RetourShipmentBcRequest::setCustomer()
     * @uses RetourShipmentBcRequest::setOriginalBarcode()
     * @uses RetourShipmentBcRequest::setOriginalBarcodeId()
     *
     * @param int    $originalBarcodeSource
     * @param string $originalBarcode
     * @param string $originalBarcodeId
     */
    public function __construct($originalBarcodeSource = null, ?Customer $customer = null, $originalBarcode = null, $originalBarcodeId = null)
    {
        $this
            ->setOriginalBarcodeSource($originalBarcodeSource)
            ->setCustomer($customer)
            ->setOriginalBarcode($originalBarcode)
            ->setOriginalBarcodeId($originalBarcodeId)
        ;
    }

    /**
     * Get originalBarcodeSource value
     *
     * @return int
     */
    public function getOriginalBarcodeSource()
    {
        return $this->originalBarcodeSource;
    }

    /**
     * Set originalBarcodeSource value
     *
     * @param int $originalBarcodeSource
     *
     * @return self
     */
    public function setOriginalBarcodeSource($originalBarcodeSource = null)
    {
        // validation for constraint: int
        if (null !== $originalBarcodeSource && !(\is_int($originalBarcodeSource) || ctype_digit($originalBarcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalBarcodeSource, true), \gettype($originalBarcodeSource)), __LINE__);
        }
        $this->originalBarcodeSource = $originalBarcodeSource;
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
     * Get originalBarcode value
     *
     * @return string|null
     */
    public function getOriginalBarcode()
    {
        return $this->originalBarcode;
    }

    /**
     * Set originalBarcode value
     *
     * @param string $originalBarcode
     *
     * @return self
     */
    public function setOriginalBarcode($originalBarcode = null)
    {
        // validation for constraint: string
        if (null !== $originalBarcode && !\is_string($originalBarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBarcode, true), \gettype($originalBarcode)), __LINE__);
        }
        $this->originalBarcode = $originalBarcode;
        return $this;
    }

    /**
     * Get originalBarcodeId value
     *
     * @return string|null
     */
    public function getOriginalBarcodeId()
    {
        return $this->originalBarcodeId;
    }

    /**
     * Set originalBarcodeId value
     *
     * @param string $originalBarcodeId
     *
     * @return self
     */
    public function setOriginalBarcodeId($originalBarcodeId = null)
    {
        // validation for constraint: string
        if (null !== $originalBarcodeId && !\is_string($originalBarcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBarcodeId, true), \gettype($originalBarcodeId)), __LINE__);
        }
        $this->originalBarcodeId = $originalBarcodeId;
        return $this;
    }
}
