<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReceiveRetourLabelRequestBase StructType
 */
abstract class ReceiveRetourLabelRequestBase extends ReceiveLabelRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var RetourServices
     */
    public $services;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $weight;
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
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Address
     */
    public $receiveraddress;
    /**
     * The customLabelText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $customLabelText;

    /**
     * Constructor method for ReceiveRetourLabelRequestBase
     *
     * @uses ReceiveRetourLabelRequestBase::setServices()
     * @uses ReceiveRetourLabelRequestBase::setWeight()
     * @uses ReceiveRetourLabelRequestBase::setShipperaddress()
     * @uses ReceiveRetourLabelRequestBase::setReceiveraddress()
     * @uses ReceiveRetourLabelRequestBase::setCustomLabelText()
     *
     * @param string $weight
     * @param string $customLabelText
     */
    public function __construct(?RetourServices $services = null, $weight = null, ?Address $shipperaddress = null, ?Address $receiveraddress = null, $customLabelText = null)
    {
        $this
            ->setServices($services)
            ->setWeight($weight)
            ->setShipperaddress($shipperaddress)
            ->setReceiveraddress($receiveraddress)
            ->setCustomLabelText($customLabelText)
        ;
    }

    /**
     * Get services value
     *
     * @return RetourServices|null
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
    public function setServices(?RetourServices $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Get weight value
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weight value
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: string
        if (null !== $weight && !\is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
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
     * Get customLabelText value
     *
     * @return string|null
     */
    public function getCustomLabelText()
    {
        return $this->customLabelText;
    }

    /**
     * Set customLabelText value
     *
     * @param string $customLabelText
     *
     * @return self
     */
    public function setCustomLabelText($customLabelText = null)
    {
        // validation for constraint: string
        if (null !== $customLabelText && !\is_string($customLabelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabelText, true), \gettype($customLabelText)), __LINE__);
        }
        $this->customLabelText = $customLabelText;
        return $this;
    }
}
