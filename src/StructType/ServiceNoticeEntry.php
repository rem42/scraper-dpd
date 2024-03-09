<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeEntry StructType
 */
class ServiceNoticeEntry extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $Type;
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
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Customer
     */
    public $Customer;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfReason
     */
    public $Reason;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Date;
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
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Weight;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Info;
    /**
     * The Counterquestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Counterquestion;

    /**
     * Constructor method for ServiceNoticeEntry
     *
     * @uses ServiceNoticeEntry::setType()
     * @uses ServiceNoticeEntry::setBarcodeId()
     * @uses ServiceNoticeEntry::setBarcodeSource()
     * @uses ServiceNoticeEntry::setCustomer()
     * @uses ServiceNoticeEntry::setReason()
     * @uses ServiceNoticeEntry::setDate()
     * @uses ServiceNoticeEntry::setStatus()
     * @uses ServiceNoticeEntry::setWeight()
     * @uses ServiceNoticeEntry::setInfo()
     * @uses ServiceNoticeEntry::setCounterquestion()
     *
     * @param string $type
     * @param string $barcodeId
     * @param string $barcodeSource
     * @param string $date
     * @param string $status
     * @param string $weight
     * @param string $info
     * @param string $counterquestion
     */
    public function __construct($type = null, $barcodeId = null, $barcodeSource = null, ?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfReason $reason = null, $date = null, $status = null, $weight = null, $info = null, $counterquestion = null)
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
     * Get Type value
     *
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set Type value
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
        $this->Type = $type;
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
     * Get Customer value
     *
     * @return Customer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     *
     * @return self
     */
    public function setCustomer(?Customer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }

    /**
     * Get Reason value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfReason|null
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * Set Reason value
     *
     * @return self
     */
    public function setReason(?\Scraper\ScraperDPD\ArrayType\ArrayOfReason $reason = null)
    {
        $this->Reason = $reason;
        return $this;
    }

    /**
     * Get Date value
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Set Date value
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
        $this->Date = $date;
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

    /**
     * Get Weight value
     *
     * @return string|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * Set Weight value
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
        $this->Weight = $weight;
        return $this;
    }

    /**
     * Get Info value
     *
     * @return string|null
     */
    public function getInfo()
    {
        return $this->Info;
    }

    /**
     * Set Info value
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
        $this->Info = $info;
        return $this;
    }

    /**
     * Get Counterquestion value
     *
     * @return string|null
     */
    public function getCounterquestion()
    {
        return $this->Counterquestion;
    }

    /**
     * Set Counterquestion value
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
        $this->Counterquestion = $counterquestion;
        return $this;
    }
}
