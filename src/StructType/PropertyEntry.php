<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyEntry StructType
 */
class PropertyEntry extends AbstractStructBase
{
    /**
     * The PropertyId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $PropertyId;
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
     * Constructor method for PropertyEntry
     *
     * @uses PropertyEntry::setPropertyId()
     * @uses PropertyEntry::setValue()
     *
     * @param int    $propertyId
     * @param string $value
     */
    public function __construct($propertyId = null, $value = null)
    {
        $this
            ->setPropertyId($propertyId)
            ->setValue($value)
        ;
    }

    /**
     * Get PropertyId value
     *
     * @return int
     */
    public function getPropertyId()
    {
        return $this->PropertyId;
    }

    /**
     * Set PropertyId value
     *
     * @param int $propertyId
     *
     * @return self
     */
    public function setPropertyId($propertyId = null)
    {
        // validation for constraint: int
        if (null !== $propertyId && !(\is_int($propertyId) || ctype_digit($propertyId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($propertyId, true), \gettype($propertyId)), __LINE__);
        }
        $this->PropertyId = $propertyId;
        return $this;
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
}
