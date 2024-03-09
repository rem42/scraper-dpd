<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeBaseRequest StructType
 */
abstract class TerminateNumberRangeBaseRequest extends AbstractStructBase
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
     * Constructor method for TerminateNumberRangeBaseRequest
     *
     * @uses TerminateNumberRangeBaseRequest::setNumberRangeFrom()
     * @uses TerminateNumberRangeBaseRequest::setNumberRangeTo()
     * @uses TerminateNumberRangeBaseRequest::setCustomerCenterNumber()
     * @uses TerminateNumberRangeBaseRequest::setCustomerNumber()
     * @uses TerminateNumberRangeBaseRequest::setClientID()
     *
     * @param int    $numberRangeFrom
     * @param int    $numberRangeTo
     * @param int    $customerCenterNumber
     * @param int    $customerNumber
     * @param string $clientID
     */
    public function __construct($numberRangeFrom = null, $numberRangeTo = null, $customerCenterNumber = null, $customerNumber = null, $clientID = null)
    {
        $this
            ->setNumberRangeFrom($numberRangeFrom)
            ->setNumberRangeTo($numberRangeTo)
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
            ->setClientID($clientID)
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
}
