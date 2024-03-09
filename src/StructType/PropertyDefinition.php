<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyDefinition StructType
 */
class PropertyDefinition extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Id;
    /**
     * The PropertyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PropertyType;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DataType;
    /**
     * The Property
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Property;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Query;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Options;

    /**
     * Constructor method for PropertyDefinition
     *
     * @uses PropertyDefinition::setId()
     * @uses PropertyDefinition::setPropertyType()
     * @uses PropertyDefinition::setDataType()
     * @uses PropertyDefinition::setProperty()
     * @uses PropertyDefinition::setQuery()
     * @uses PropertyDefinition::setOptions()
     *
     * @param int    $id
     * @param string $propertyType
     * @param string $dataType
     * @param string $property
     * @param string $query
     * @param string $options
     */
    public function __construct($id = null, $propertyType = null, $dataType = null, $property = null, $query = null, $options = null)
    {
        $this
            ->setId($id)
            ->setPropertyType($propertyType)
            ->setDataType($dataType)
            ->setProperty($property)
            ->setQuery($query)
            ->setOptions($options)
        ;
    }

    /**
     * Get Id value
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set Id value
     *
     * @param int $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (null !== $id && !(\is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), \gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }

    /**
     * Get PropertyType value
     *
     * @return string|null
     */
    public function getPropertyType()
    {
        return $this->PropertyType;
    }

    /**
     * Set PropertyType value
     *
     * @param string $propertyType
     *
     * @return self
     */
    public function setPropertyType($propertyType = null)
    {
        // validation for constraint: string
        if (null !== $propertyType && !\is_string($propertyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyType, true), \gettype($propertyType)), __LINE__);
        }
        $this->PropertyType = $propertyType;
        return $this;
    }

    /**
     * Get DataType value
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->DataType;
    }

    /**
     * Set DataType value
     *
     * @param string $dataType
     *
     * @return self
     */
    public function setDataType($dataType = null)
    {
        // validation for constraint: string
        if (null !== $dataType && !\is_string($dataType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataType, true), \gettype($dataType)), __LINE__);
        }
        $this->DataType = $dataType;
        return $this;
    }

    /**
     * Get Property value
     *
     * @return string|null
     */
    public function getProperty()
    {
        return $this->Property;
    }

    /**
     * Set Property value
     *
     * @param string $property
     *
     * @return self
     */
    public function setProperty($property = null)
    {
        // validation for constraint: string
        if (null !== $property && !\is_string($property)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($property, true), \gettype($property)), __LINE__);
        }
        $this->Property = $property;
        return $this;
    }

    /**
     * Get Query value
     *
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }

    /**
     * Set Query value
     *
     * @param string $query
     *
     * @return self
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (null !== $query && !\is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), \gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }

    /**
     * Get Options value
     *
     * @return string|null
     */
    public function getOptions()
    {
        return $this->Options;
    }

    /**
     * Set Options value
     *
     * @param string $options
     *
     * @return self
     */
    public function setOptions($options = null)
    {
        // validation for constraint: string
        if (null !== $options && !\is_string($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($options, true), \gettype($options)), __LINE__);
        }
        $this->Options = $options;
        return $this;
    }
}
