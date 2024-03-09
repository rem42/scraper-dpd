<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNotice StructType
 */
class ServiceNotice extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $type;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeId;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BarcodeSource;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $customer;
    /**
     * The reason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $reason;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $date;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $status;
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
     * The info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $info;
    /**
     * The counterquestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $counterquestion;

    /**
     * Constructor method for ServiceNotice
     *
     * @uses ServiceNotice::setType()
     * @uses ServiceNotice::setBarcodeId()
     * @uses ServiceNotice::setBarcodeSource()
     * @uses ServiceNotice::setCustomer()
     * @uses ServiceNotice::setReason()
     * @uses ServiceNotice::setDate()
     * @uses ServiceNotice::setStatus()
     * @uses ServiceNotice::setWeight()
     * @uses ServiceNotice::setInfo()
     * @uses ServiceNotice::setCounterquestion()
     *
     * @param string $type
     * @param string $barcodeId
     * @param string $barcodeSource
     * @param string $reason
     * @param string $date
     * @param string $status
     * @param string $weight
     * @param string $info
     * @param string $counterquestion
     */
    public function __construct($type = null, $barcodeId = null, $barcodeSource = null, ?Customer $customer = null, $reason = null, $date = null, $status = null, $weight = null, $info = null, $counterquestion = null)
    {
        $this
            ->setType($type)
            ->setBarcodeId($barcodeId)
            ->setBarcodeSource($barcodeSource)
            ->setCustomer($customer)
            ->setReason($reason)
            ->setDate($date)
            ->setStatus($status)
            ->setWeight($weight)
            ->setInfo($info)
            ->setCounterquestion($counterquestion)
        ;
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues()
     *
     * @param string $type
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ServiceNoticeType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Get BarcodeId value
     *
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value
     *
     * @param string $barcodeId
     *
     * @return self
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;
        return $this;
    }

    /**
     * Get BarcodeSource value
     *
     * @return string|null
     */
    public function getBarcodeSource()
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     *
     * @param string $barcodeSource
     *
     * @return self
     */
    public function setBarcodeSource($barcodeSource = null)
    {
        // validation for constraint: string
        if (null !== $barcodeSource && !\is_string($barcodeSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;
        return $this;
    }

    /**
     * Get customer value
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set customer value
     *
     * @return self
     */
    public function setCustomer(?Customer $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Get reason value
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set reason value
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason($reason = null)
    {
        // validation for constraint: string
        if (null !== $reason && !\is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), \gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        return $this;
    }

    /**
     * Get date value
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set date value
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Get status value
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status value
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
        $this->status = $status;
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
     * Get info value
     *
     * @return string|null
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Set info value
     *
     * @param string $info
     *
     * @return self
     */
    public function setInfo($info = null)
    {
        // validation for constraint: string
        if (null !== $info && !\is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), \gettype($info)), __LINE__);
        }
        $this->info = $info;
        return $this;
    }

    /**
     * Get counterquestion value
     *
     * @return string|null
     */
    public function getCounterquestion()
    {
        return $this->counterquestion;
    }

    /**
     * Set counterquestion value
     *
     * @param string $counterquestion
     *
     * @return self
     */
    public function setCounterquestion($counterquestion = null)
    {
        // validation for constraint: string
        if (null !== $counterquestion && !\is_string($counterquestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($counterquestion, true), \gettype($counterquestion)), __LINE__);
        }
        $this->counterquestion = $counterquestion;
        return $this;
    }
}
