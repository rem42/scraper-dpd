<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberRangeBaseResponse StructType
 */
abstract class NumberRangeBaseResponse extends AbstractStructBase
{
    /**
     * The NumberRangeFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $NumberRangeFrom;
    /**
     * The NumberRangeTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $NumberRangeTo;
    /**
     * The NumberRangeFree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $NumberRangeFree;
    /**
     * The CustomerCenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $CustomerCenterNumber;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $CustomerNumber;
    /**
     * The NumberRangeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $NumberRangeType;
    /**
     * The NumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $NumberType;
    /**
     * The ClientId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ClientId;
    /**
     * The ValidUntil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ValidUntil;

    /**
     * Constructor method for NumberRangeBaseResponse
     *
     * @uses NumberRangeBaseResponse::setNumberRangeFrom()
     * @uses NumberRangeBaseResponse::setNumberRangeTo()
     * @uses NumberRangeBaseResponse::setNumberRangeFree()
     * @uses NumberRangeBaseResponse::setCustomerCenterNumber()
     * @uses NumberRangeBaseResponse::setCustomerNumber()
     * @uses NumberRangeBaseResponse::setNumberRangeType()
     * @uses NumberRangeBaseResponse::setNumberType()
     * @uses NumberRangeBaseResponse::setClientId()
     * @uses NumberRangeBaseResponse::setValidUntil()
     *
     * @param int    $numberRangeFrom
     * @param int    $numberRangeTo
     * @param int    $numberRangeFree
     * @param int    $customerCenterNumber
     * @param int    $customerNumber
     * @param int    $numberRangeType
     * @param int    $numberType
     * @param string $clientId
     * @param string $validUntil
     */
    public function __construct($numberRangeFrom = null, $numberRangeTo = null, $numberRangeFree = null, $customerCenterNumber = null, $customerNumber = null, $numberRangeType = null, $numberType = null, $clientId = null, $validUntil = null)
    {
        $this
            ->setNumberRangeFrom($numberRangeFrom)
            ->setNumberRangeTo($numberRangeTo)
            ->setNumberRangeFree($numberRangeFree)
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
            ->setNumberRangeType($numberRangeType)
            ->setNumberType($numberType)
            ->setClientId($clientId)
            ->setValidUntil($validUntil)
        ;
    }

    /**
     * Get NumberRangeFrom value
     *
     * @return int
     */
    public function getNumberRangeFrom()
    {
        return $this->NumberRangeFrom;
    }

    /**
     * Set NumberRangeFrom value
     *
     * @param int $numberRangeFrom
     *
     * @return self
     */
    public function setNumberRangeFrom($numberRangeFrom = null)
    {
        // validation for constraint: int
        if (null !== $numberRangeFrom && !(\is_int($numberRangeFrom) || ctype_digit($numberRangeFrom))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeFrom, true), \gettype($numberRangeFrom)), __LINE__);
        }
        $this->NumberRangeFrom = $numberRangeFrom;
        return $this;
    }

    /**
     * Get NumberRangeTo value
     *
     * @return int
     */
    public function getNumberRangeTo()
    {
        return $this->NumberRangeTo;
    }

    /**
     * Set NumberRangeTo value
     *
     * @param int $numberRangeTo
     *
     * @return self
     */
    public function setNumberRangeTo($numberRangeTo = null)
    {
        // validation for constraint: int
        if (null !== $numberRangeTo && !(\is_int($numberRangeTo) || ctype_digit($numberRangeTo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeTo, true), \gettype($numberRangeTo)), __LINE__);
        }
        $this->NumberRangeTo = $numberRangeTo;
        return $this;
    }

    /**
     * Get NumberRangeFree value
     *
     * @return int
     */
    public function getNumberRangeFree()
    {
        return $this->NumberRangeFree;
    }

    /**
     * Set NumberRangeFree value
     *
     * @param int $numberRangeFree
     *
     * @return self
     */
    public function setNumberRangeFree($numberRangeFree = null)
    {
        // validation for constraint: int
        if (null !== $numberRangeFree && !(\is_int($numberRangeFree) || ctype_digit($numberRangeFree))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeFree, true), \gettype($numberRangeFree)), __LINE__);
        }
        $this->NumberRangeFree = $numberRangeFree;
        return $this;
    }

    /**
     * Get CustomerCenterNumber value
     *
     * @return int
     */
    public function getCustomerCenterNumber()
    {
        return $this->CustomerCenterNumber;
    }

    /**
     * Set CustomerCenterNumber value
     *
     * @param int $customerCenterNumber
     *
     * @return self
     */
    public function setCustomerCenterNumber($customerCenterNumber = null)
    {
        // validation for constraint: int
        if (null !== $customerCenterNumber && !(\is_int($customerCenterNumber) || ctype_digit($customerCenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerCenterNumber, true), \gettype($customerCenterNumber)), __LINE__);
        }
        $this->CustomerCenterNumber = $customerCenterNumber;
        return $this;
    }

    /**
     * Get CustomerNumber value
     *
     * @return int
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * Set CustomerNumber value
     *
     * @param int $customerNumber
     *
     * @return self
     */
    public function setCustomerNumber($customerNumber = null)
    {
        // validation for constraint: int
        if (null !== $customerNumber && !(\is_int($customerNumber) || ctype_digit($customerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerNumber, true), \gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;
        return $this;
    }

    /**
     * Get NumberRangeType value
     *
     * @return int
     */
    public function getNumberRangeType()
    {
        return $this->NumberRangeType;
    }

    /**
     * Set NumberRangeType value
     *
     * @param int $numberRangeType
     *
     * @return self
     */
    public function setNumberRangeType($numberRangeType = null)
    {
        // validation for constraint: int
        if (null !== $numberRangeType && !(\is_int($numberRangeType) || ctype_digit($numberRangeType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeType, true), \gettype($numberRangeType)), __LINE__);
        }
        $this->NumberRangeType = $numberRangeType;
        return $this;
    }

    /**
     * Get NumberType value
     *
     * @return int
     */
    public function getNumberType()
    {
        return $this->NumberType;
    }

    /**
     * Set NumberType value
     *
     * @param int $numberType
     *
     * @return self
     */
    public function setNumberType($numberType = null)
    {
        // validation for constraint: int
        if (null !== $numberType && !(\is_int($numberType) || ctype_digit($numberType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberType, true), \gettype($numberType)), __LINE__);
        }
        $this->NumberType = $numberType;
        return $this;
    }

    /**
     * Get ClientId value
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->ClientId;
    }

    /**
     * Set ClientId value
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId($clientId = null)
    {
        // validation for constraint: string
        if (null !== $clientId && !\is_string($clientId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), \gettype($clientId)), __LINE__);
        }
        $this->ClientId = $clientId;
        return $this;
    }

    /**
     * Get ValidUntil value
     *
     * @return string|null
     */
    public function getValidUntil()
    {
        return $this->ValidUntil;
    }

    /**
     * Set ValidUntil value
     *
     * @param string $validUntil
     *
     * @return self
     */
    public function setValidUntil($validUntil = null)
    {
        // validation for constraint: string
        if (null !== $validUntil && !\is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), \gettype($validUntil)), __LINE__);
        }
        $this->ValidUntil = $validUntil;
        return $this;
    }
}
