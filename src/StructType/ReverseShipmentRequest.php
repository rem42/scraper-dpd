<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseShipmentRequest StructType
 */
class ReverseShipmentRequest extends ShipmentRequestBase
{
    /**
     * The expire_offset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $expire_offset;
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
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $referencenumber;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var ReverseInverseServices
     */
    public $services;

    /**
     * Constructor method for ReverseShipmentRequest
     *
     * @uses ReverseShipmentRequest::setExpire_offset()
     * @uses ReverseShipmentRequest::setWeight()
     * @uses ReverseShipmentRequest::setReferencenumber()
     * @uses ReverseShipmentRequest::setServices()
     *
     * @param int    $expire_offset
     * @param string $weight
     * @param string $referencenumber
     */
    public function __construct($expire_offset = null, $weight = null, $referencenumber = null, ?ReverseInverseServices $services = null)
    {
        $this
            ->setExpire_offset($expire_offset)
            ->setWeight($weight)
            ->setReferencenumber($referencenumber)
            ->setServices($services)
        ;
    }

    /**
     * Get expire_offset value
     *
     * @return int
     */
    public function getExpire_offset()
    {
        return $this->expire_offset;
    }

    /**
     * Set expire_offset value
     *
     * @param int $expire_offset
     *
     * @return self
     */
    public function setExpire_offset($expire_offset = null)
    {
        // validation for constraint: int
        if (null !== $expire_offset && !(\is_int($expire_offset) || ctype_digit($expire_offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expire_offset, true), \gettype($expire_offset)), __LINE__);
        }
        $this->expire_offset = $expire_offset;
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
     * Get services value
     *
     * @return ReverseInverseServices|null
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
    public function setServices(?ReverseInverseServices $services = null)
    {
        $this->services = $services;
        return $this;
    }
}
