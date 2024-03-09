<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionResponse StructType
 */
class GetOptionResponse extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Value;
    /**
     * The Parameter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Parameter;

    /**
     * Constructor method for GetOptionResponse
     *
     * @uses GetOptionResponse::setValue()
     * @uses GetOptionResponse::setParameter()
     *
     * @param string $value
     * @param string $parameter
     */
    public function __construct($value = null, $parameter = null)
    {
        $this
            ->setValue($value)
            ->setParameter($parameter)
        ;
    }

    /**
     * Get Value value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Set Value value
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (null !== $value && !\is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), \gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }

    /**
     * Get Parameter value
     *
     * @return string|null
     */
    public function getParameter()
    {
        return $this->Parameter;
    }

    /**
     * Set Parameter value
     *
     * @param string $parameter
     *
     * @return self
     */
    public function setParameter($parameter = null)
    {
        // validation for constraint: string
        if (null !== $parameter && !\is_string($parameter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameter, true), \gettype($parameter)), __LINE__);
        }
        $this->Parameter = $parameter;
        return $this;
    }
}
