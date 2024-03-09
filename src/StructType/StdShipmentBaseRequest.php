<?php

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for StdShipmentBaseRequest StructType
 */
class StdShipmentBaseRequest extends ShipmentRequestDefaultData
{
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
     * Constructor method for StdShipmentBaseRequest
     *
     * @uses StdShipmentBaseRequest::setWeight()
     * @uses StdShipmentBaseRequest::setReferencenumber()
     * @uses StdShipmentBaseRequest::setReference2()
     * @uses StdShipmentBaseRequest::setReference3()
     * @uses StdShipmentBaseRequest::setReference4()
     *
     * @param string $weight
     * @param string $referencenumber
     * @param string $reference2
     * @param string $reference3
     * @param string $reference4
     */
    public function __construct($weight = null, $referencenumber = null, $reference2 = null, $reference3 = null, $reference4 = null)
    {
        $this
            ->setWeight($weight)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
        ;
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
}
