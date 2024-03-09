<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvService StructType
 */
class RdvService extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Type;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Attribute;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $Status;

    /**
     * Constructor method for RdvService
     *
     * @uses RdvService::setType()
     * @uses RdvService::setAttribute()
     * @uses RdvService::setStatus()
     *
     * @param int $type
     * @param int $attribute
     * @param int $status
     */
    public function __construct($type = null, $attribute = null, $status = null)
    {
        $this
            ->setType($type)
            ->setAttribute($attribute)
            ->setStatus($status)
        ;
    }

    /**
     * Get Type value
     *
     * @return int
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @param int $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: int
        if (null !== $type && !(\is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), \gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }

    /**
     * Get Attribute value
     *
     * @return int
     */
    public function getAttribute()
    {
        return $this->Attribute;
    }

    /**
     * Set Attribute value
     *
     * @param int $attribute
     *
     * @return self
     */
    public function setAttribute($attribute = null)
    {
        // validation for constraint: int
        if (null !== $attribute && !(\is_int($attribute) || ctype_digit($attribute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attribute, true), \gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;
        return $this;
    }

    /**
     * Get Status value
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set Status value
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (null !== $status && !(\is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), \gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
}
