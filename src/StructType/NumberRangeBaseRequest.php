<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberRangeBaseRequest StructType
 */
abstract class NumberRangeBaseRequest extends AbstractStructBase
{
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
     * The ClientID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ClientID;
    /**
     * The NumberRangeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $NumberRangeType;

    /**
     * Constructor method for NumberRangeBaseRequest
     *
     * @uses NumberRangeBaseRequest::setCustomerCenterNumber()
     * @uses NumberRangeBaseRequest::setCustomerNumber()
     * @uses NumberRangeBaseRequest::setClientID()
     * @uses NumberRangeBaseRequest::setNumberRangeType()
     *
     * @param int    $customerCenterNumber
     * @param int    $customerNumber
     * @param string $clientID
     * @param string $numberRangeType
     */
    public function __construct($customerCenterNumber = null, $customerNumber = null, $clientID = null, $numberRangeType = null)
    {
        $this
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
            ->setClientID($clientID)
            ->setNumberRangeType($numberRangeType)
        ;
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
     * Get ClientID value
     *
     * @return string|null
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * Set ClientID value
     *
     * @param string $clientID
     *
     * @return self
     */
    public function setClientID($clientID = null)
    {
        // validation for constraint: string
        if (null !== $clientID && !\is_string($clientID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientID, true), \gettype($clientID)), __LINE__);
        }
        $this->ClientID = $clientID;
        return $this;
    }

    /**
     * Get NumberRangeType value
     *
     * @return string|null
     */
    public function getNumberRangeType()
    {
        return $this->NumberRangeType;
    }

    /**
     * Set NumberRangeType value
     *
     * @param string $numberRangeType
     *
     * @return self
     */
    public function setNumberRangeType($numberRangeType = null)
    {
        // validation for constraint: string
        if (null !== $numberRangeType && !\is_string($numberRangeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeType, true), \gettype($numberRangeType)), __LINE__);
        }
        $this->NumberRangeType = $numberRangeType;
        return $this;
    }
}
