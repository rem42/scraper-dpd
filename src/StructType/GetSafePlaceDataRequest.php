<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceDataRequest StructType
 */
class GetSafePlaceDataRequest extends AbstractStructBase
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var int
     */
    public $BarcodeSource;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeId;
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
     * Constructor method for GetSafePlaceDataRequest
     *
     * @uses GetSafePlaceDataRequest::setBarcodeSource()
     * @uses GetSafePlaceDataRequest::setBarcodeId()
     * @uses GetSafePlaceDataRequest::setCustomer()
     *
     * @param int    $barcodeSource
     * @param string $barcodeId
     */
    public function __construct($barcodeSource = null, $barcodeId = null, ?Customer $customer = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get BarcodeSource value
     *
     * @return int
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     *
     * @param int $barcodeSource
     *
     * @return self
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: int
        if (null !== $barcodeSource && !(\is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }

    /**
     * Get BarcodeId value
     *
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value
     *
     * @param string $barcodeId
     *
     * @return self
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;
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
}
