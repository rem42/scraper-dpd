<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipping StructType
 */
class Shipping extends AbstractStructBase
{
    /**
     * The barcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $barcodeSource;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $weight;
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $shipment;
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $barcodeId;
    /**
     * The receiverAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var AddressIso2Name
     */
    public $receiverAddress;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $reference;

    /**
     * Constructor method for Shipping
     *
     * @uses Shipping::setBarcodeSource()
     * @uses Shipping::setWeight()
     * @uses Shipping::setShipment()
     * @uses Shipping::setBarcodeId()
     * @uses Shipping::setReceiverAddress()
     * @uses Shipping::setReference()
     *
     * @param int    $barcodeSource
     * @param float  $weight
     * @param string $shipment
     * @param string $barcodeId
     * @param string $reference
     */
    public function __construct($barcodeSource = null, $weight = null, $shipment = null, $barcodeId = null, ?AddressIso2Name $receiverAddress = null, $reference = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setWeight($weight)
            ->setShipment($shipment)
            ->setBarcodeId($barcodeId)
            ->setReceiverAddress($receiverAddress)
            ->setReference($reference)
        ;
    }

    /**
     * Get barcodeSource value
     *
     * @return int
     */
    public function getBarcodeSource()
    {
        return $this->barcodeSource;
    }

    /**
     * Set barcodeSource value
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
        $this->barcodeSource = $barcodeSource;
        return $this;
    }

    /**
     * Get weight value
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weight value
     *
     * @param float $weight
     *
     * @return self
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (null !== $weight && !(\is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }

    /**
     * Get shipment value
     *
     * @return string|null
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set shipment value
     *
     * @param string $shipment
     *
     * @return self
     */
    public function setShipment($shipment = null)
    {
        // validation for constraint: string
        if (null !== $shipment && !\is_string($shipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipment, true), \gettype($shipment)), __LINE__);
        }
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Get barcodeId value
     *
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->barcodeId;
    }

    /**
     * Set barcodeId value
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
        $this->barcodeId = $barcodeId;
        return $this;
    }

    /**
     * Get receiverAddress value
     *
     * @return AddressIso2Name|null
     */
    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * Set receiverAddress value
     *
     * @return self
     */
    public function setReceiverAddress(?AddressIso2Name $receiverAddress = null)
    {
        $this->receiverAddress = $receiverAddress;
        return $this;
    }

    /**
     * Get reference value
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set reference value
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference($reference = null)
    {
        // validation for constraint: string
        if (null !== $reference && !\is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), \gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        return $this;
    }
}
