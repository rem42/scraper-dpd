<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRequestBase StructType
 */
class ShipmentRequestBase extends AbstractStructBase
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
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $receiveraddress;
    /**
     * The receiverinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var AddressInfo
     */
    public $receiverinfo;
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
     * The shipperinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var AddressInfo
     */
    public $shipperinfo;
    /**
     * The retourAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $retourAddress;
    /**
     * The shippingdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $shippingdate;

    /**
     * Constructor method for ShipmentRequestBase
     *
     * @uses ShipmentRequestBase::setCustomer_countrycode()
     * @uses ShipmentRequestBase::setCustomer_centernumber()
     * @uses ShipmentRequestBase::setCustomer_number()
     * @uses ShipmentRequestBase::setReceiveraddress()
     * @uses ShipmentRequestBase::setReceiverinfo()
     * @uses ShipmentRequestBase::setShipperaddress()
     * @uses ShipmentRequestBase::setShipperinfo()
     * @uses ShipmentRequestBase::setRetourAddress()
     * @uses ShipmentRequestBase::setShippingdate()
     *
     * @param int    $customer_countrycode
     * @param int    $customer_centernumber
     * @param int    $customer_number
     * @param string $shippingdate
     */
    public function __construct($customer_countrycode = null, $customer_centernumber = null, $customer_number = null, ?Address $receiveraddress = null, ?AddressInfo $receiverinfo = null, ?Address $shipperaddress = null, ?AddressInfo $shipperinfo = null, ?Address $retourAddress = null, $shippingdate = null)
    {
        $this
            ->setCustomer_countrycode($customer_countrycode)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomer_number($customer_number)
            ->setReceiveraddress($receiveraddress)
            ->setReceiverinfo($receiverinfo)
            ->setShipperaddress($shipperaddress)
            ->setShipperinfo($shipperinfo)
            ->setRetourAddress($retourAddress)
            ->setShippingdate($shippingdate)
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
     * Get receiverinfo value
     *
     * @return AddressInfo|null
     */
    public function getReceiverinfo()
    {
        return $this->receiverinfo;
    }

    /**
     * Set receiverinfo value
     *
     * @return self
     */
    public function setReceiverinfo(?AddressInfo $receiverinfo = null)
    {
        $this->receiverinfo = $receiverinfo;
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
     * Get shipperinfo value
     *
     * @return AddressInfo|null
     */
    public function getShipperinfo()
    {
        return $this->shipperinfo;
    }

    /**
     * Set shipperinfo value
     *
     * @return self
     */
    public function setShipperinfo(?AddressInfo $shipperinfo = null)
    {
        $this->shipperinfo = $shipperinfo;
        return $this;
    }

    /**
     * Get retourAddress value
     *
     * @return Address|null
     */
    public function getRetourAddress()
    {
        return $this->retourAddress;
    }

    /**
     * Set retourAddress value
     *
     * @return self
     */
    public function setRetourAddress(?Address $retourAddress = null)
    {
        $this->retourAddress = $retourAddress;
        return $this;
    }

    /**
     * Get shippingdate value
     *
     * @return string|null
     */
    public function getShippingdate()
    {
        return $this->shippingdate;
    }

    /**
     * Set shippingdate value
     *
     * @param string $shippingdate
     *
     * @return self
     */
    public function setShippingdate($shippingdate = null)
    {
        // validation for constraint: string
        if (null !== $shippingdate && !\is_string($shippingdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingdate, true), \gettype($shippingdate)), __LINE__);
        }
        $this->shippingdate = $shippingdate;
        return $this;
    }
}
