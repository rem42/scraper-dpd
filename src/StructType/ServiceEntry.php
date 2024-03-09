<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceEntry StructType
 */
class ServiceEntry extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Name;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Type;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Attribute;
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
     * The Detail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Detail;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Status;

    /**
     * Constructor method for ServiceEntry
     *
     * @uses ServiceEntry::setName()
     * @uses ServiceEntry::setType()
     * @uses ServiceEntry::setAttribute()
     * @uses ServiceEntry::setValue()
     * @uses ServiceEntry::setDetail()
     * @uses ServiceEntry::setStatus()
     *
     * @param string $name
     * @param string $type
     * @param string $attribute
     * @param string $value
     * @param string $detail
     * @param string $status
     */
    public function __construct($name = null, $type = null, $attribute = null, $value = null, $detail = null, $status = null)
    {
        $this
            ->setName($name)
            ->setType($type)
            ->setAttribute($attribute)
            ->setValue($value)
            ->setDetail($detail)
            ->setStatus($status)
        ;
    }

    /**
     * Get Name value
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Set Name value
     *
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }

    /**
     * Get Type value
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (null !== $type && !\is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), \gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }

    /**
     * Get Attribute value
     *
     * @return string|null
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }

    /**
     * Set Attribute value
     *
     * @param string $attribute
     *
     * @return self
     */
    public function setAttribute($attribute = null)
    {
        // validation for constraint: string
        if (null !== $attribute && !\is_string($attribute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribute, true), \gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;
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

    /**
     * Get Detail value
     *
     * @return string|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }

    /**
     * Set Detail value
     *
     * @param string $detail
     *
     * @return self
     */
    public function setDetail($detail = null)
    {
        // validation for constraint: string
        if (null !== $detail && !\is_string($detail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detail, true), \gettype($detail)), __LINE__);
        }
        $this->Detail = $detail;
        return $this;
    }

    /**
     * Get Status value
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set Status value
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (null !== $status && !\is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), \gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
}
