<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionRequestRequestBase StructType
 */
abstract class CollectionRequestRequestBase extends AbstractStructBase
{
    /**
     * The customer_countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $customer_countrycode;
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $customer_centernumber;
    /**
     * The customer_number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $customer_number;
    /**
     * The parcel_count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $parcel_count;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $receiveraddress;
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
     * The remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $remark;
    /**
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $referencenumber;
    /**
     * The reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $reference2;
    /**
     * The reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $reference3;
    /**
     * The reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $reference4;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var CollectionRequestServices
     */
    public $services;

    /**
     * Constructor method for CollectionRequestRequestBase
     *
     * @uses CollectionRequestRequestBase::setCustomer_countrycode()
     * @uses CollectionRequestRequestBase::setCustomer_centernumber()
     * @uses CollectionRequestRequestBase::setCustomer_number()
     * @uses CollectionRequestRequestBase::setParcel_count()
     * @uses CollectionRequestRequestBase::setReceiveraddress()
     * @uses CollectionRequestRequestBase::setShipperaddress()
     * @uses CollectionRequestRequestBase::setRemark()
     * @uses CollectionRequestRequestBase::setReferencenumber()
     * @uses CollectionRequestRequestBase::setReference2()
     * @uses CollectionRequestRequestBase::setReference3()
     * @uses CollectionRequestRequestBase::setReference4()
     * @uses CollectionRequestRequestBase::setServices()
     *
     * @param int    $customer_countrycode
     * @param int    $customer_centernumber
     * @param int    $customer_number
     * @param int    $parcel_count
     * @param string $remark
     * @param string $referencenumber
     * @param string $reference2
     * @param string $reference3
     * @param string $reference4
     */
    public function __construct($customer_countrycode = null, $customer_centernumber = null, $customer_number = null, $parcel_count = null, ?Address $receiveraddress = null, ?Address $shipperaddress = null, $remark = null, $referencenumber = null, $reference2 = null, $reference3 = null, $reference4 = null, ?CollectionRequestServices $services = null)
    {
        $this
            ->setCustomer_countrycode($customer_countrycode)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomer_number($customer_number)
            ->setParcel_count($parcel_count)
            ->setReceiveraddress($receiveraddress)
            ->setShipperaddress($shipperaddress)
            ->setRemark($remark)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setServices($services)
        ;
    }

    /**
     * Get customer_countrycode value
     *
     * @return int
     */
    public function getCustomer_countrycode()
    {
        return $this->customer_countrycode;
    }

    /**
     * Set customer_countrycode value
     *
     * @param int $customer_countrycode
     *
     * @return self
     */
    public function setCustomer_countrycode($customer_countrycode = null)
    {
        // validation for constraint: int
        if (null !== $customer_countrycode && !(\is_int($customer_countrycode) || ctype_digit($customer_countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_countrycode, true), \gettype($customer_countrycode)), __LINE__);
        }
        $this->customer_countrycode = $customer_countrycode;
        return $this;
    }

    /**
     * Get customer_centernumber value
     *
     * @return int
     */
    public function getCustomer_centernumber()
    {
        return $this->customer_centernumber;
    }

    /**
     * Set customer_centernumber value
     *
     * @param int $customer_centernumber
     *
     * @return self
     */
    public function setCustomer_centernumber($customer_centernumber = null)
    {
        // validation for constraint: int
        if (null !== $customer_centernumber && !(\is_int($customer_centernumber) || ctype_digit($customer_centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_centernumber, true), \gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;
        return $this;
    }

    /**
     * Get customer_number value
     *
     * @return int
     */
    public function getCustomer_number()
    {
        return $this->customer_number;
    }

    /**
     * Set customer_number value
     *
     * @param int $customer_number
     *
     * @return self
     */
    public function setCustomer_number($customer_number = null)
    {
        // validation for constraint: int
        if (null !== $customer_number && !(\is_int($customer_number) || ctype_digit($customer_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_number, true), \gettype($customer_number)), __LINE__);
        }
        $this->customer_number = $customer_number;
        return $this;
    }

    /**
     * Get parcel_count value
     *
     * @return int
     */
    public function getParcel_count()
    {
        return $this->parcel_count;
    }

    /**
     * Set parcel_count value
     *
     * @param int $parcel_count
     *
     * @return self
     */
    public function setParcel_count($parcel_count = null)
    {
        // validation for constraint: int
        if (null !== $parcel_count && !(\is_int($parcel_count) || ctype_digit($parcel_count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parcel_count, true), \gettype($parcel_count)), __LINE__);
        }
        $this->parcel_count = $parcel_count;
        return $this;
    }

    /**
     * Get receiveraddress value
     *
     * @return Address|null
     */
    public function getReceiveraddress()
    {
        return $this->receiveraddress;
    }

    /**
     * Set receiveraddress value
     *
     * @return self
     */
    public function setReceiveraddress(?Address $receiveraddress = null)
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
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
     * Get remark value
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Set remark value
     *
     * @param string $remark
     *
     * @return self
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (null !== $remark && !\is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), \gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        return $this;
    }

    /**
     * Get referencenumber value
     *
     * @return string|null
     */
    public function getReferencenumber()
    {
        return $this->referencenumber;
    }

    /**
     * Set referencenumber value
     *
     * @param string $referencenumber
     *
     * @return self
     */
    public function setReferencenumber($referencenumber = null)
    {
        // validation for constraint: string
        if (null !== $referencenumber && !\is_string($referencenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencenumber, true), \gettype($referencenumber)), __LINE__);
        }
        $this->referencenumber = $referencenumber;
        return $this;
    }

    /**
     * Get reference2 value
     *
     * @return string|null
     */
    public function getReference2()
    {
        return $this->reference2;
    }

    /**
     * Set reference2 value
     *
     * @param string $reference2
     *
     * @return self
     */
    public function setReference2($reference2 = null)
    {
        // validation for constraint: string
        if (null !== $reference2 && !\is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), \gettype($reference2)), __LINE__);
        }
        $this->reference2 = $reference2;
        return $this;
    }

    /**
     * Get reference3 value
     *
     * @return string|null
     */
    public function getReference3()
    {
        return $this->reference3;
    }

    /**
     * Set reference3 value
     *
     * @param string $reference3
     *
     * @return self
     */
    public function setReference3($reference3 = null)
    {
        // validation for constraint: string
        if (null !== $reference3 && !\is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), \gettype($reference3)), __LINE__);
        }
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Get reference4 value
     *
     * @return string|null
     */
    public function getReference4()
    {
        return $this->reference4;
    }

    /**
     * Set reference4 value
     *
     * @param string $reference4
     *
     * @return self
     */
    public function setReference4($reference4 = null)
    {
        // validation for constraint: string
        if (null !== $reference4 && !\is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), \gettype($reference4)), __LINE__);
        }
        $this->reference4 = $reference4;
        return $this;
    }

    /**
     * Get services value
     *
     * @return CollectionRequestServices|null
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set services value
     *
     * @return self
     */
    public function setServices(?CollectionRequestServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
