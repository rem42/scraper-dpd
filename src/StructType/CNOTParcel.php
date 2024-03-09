<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CNOTParcel StructType
 */
class CNOTParcel extends AbstractStructBase
{
    /**
     * The BcSrc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var int
     */
    public $BcSrc;
    /**
     * The Prio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $Prio;
    /**
     * The DeliveryRecordPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $DeliveryRecordPosition;
    /**
     * The OnTourAppended
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $OnTourAppended;
    /**
     * The TDVHit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $TDVHit;
    /**
     * The BcId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $BcId;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Barcode;
    /**
     * The DeliveryNotificationNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DeliveryNotificationNumber;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Comment;
    /**
     * The TimeWindowFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TimeWindowFrom;
    /**
     * The TimeWindowTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TimeWindowTo;
    /**
     * The TDVAddressRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TDVAddressRef;

    /**
     * Constructor method for CNOTParcel
     *
     * @uses CNOTParcel::setBcSrc()
     * @uses CNOTParcel::setPrio()
     * @uses CNOTParcel::setDeliveryRecordPosition()
     * @uses CNOTParcel::setOnTourAppended()
     * @uses CNOTParcel::setTDVHit()
     * @uses CNOTParcel::setBcId()
     * @uses CNOTParcel::setBarcode()
     * @uses CNOTParcel::setDeliveryNotificationNumber()
     * @uses CNOTParcel::setComment()
     * @uses CNOTParcel::setTimeWindowFrom()
     * @uses CNOTParcel::setTimeWindowTo()
     * @uses CNOTParcel::setTDVAddressRef()
     *
     * @param int    $bcSrc
     * @param bool   $prio
     * @param int    $deliveryRecordPosition
     * @param bool   $onTourAppended
     * @param bool   $tDVHit
     * @param string $bcId
     * @param string $barcode
     * @param string $deliveryNotificationNumber
     * @param string $comment
     * @param string $timeWindowFrom
     * @param string $timeWindowTo
     * @param string $tDVAddressRef
     */
    public function __construct($bcSrc = null, $prio = null, $deliveryRecordPosition = null, $onTourAppended = null, $tDVHit = null, $bcId = null, $barcode = null, $deliveryNotificationNumber = null, $comment = null, $timeWindowFrom = null, $timeWindowTo = null, $tDVAddressRef = null)
    {
        $this
            ->setBcSrc($bcSrc)
            ->setPrio($prio)
            ->setDeliveryRecordPosition($deliveryRecordPosition)
            ->setOnTourAppended($onTourAppended)
            ->setTDVHit($tDVHit)
            ->setBcId($bcId)
            ->setBarcode($barcode)
            ->setDeliveryNotificationNumber($deliveryNotificationNumber)
            ->setComment($comment)
            ->setTimeWindowFrom($timeWindowFrom)
            ->setTimeWindowTo($timeWindowTo)
            ->setTDVAddressRef($tDVAddressRef)
        ;
    }

    /**
     * Get BcSrc value
     *
     * @return int
     */
    public function getBcSrc()
    {
        return $this->BcSrc;
    }

    /**
     * Set BcSrc value
     *
     * @param int $bcSrc
     *
     * @return self
     */
    public function setBcSrc($bcSrc = null)
    {
        // validation for constraint: int
        if (null !== $bcSrc && !(\is_int($bcSrc) || ctype_digit($bcSrc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bcSrc, true), \gettype($bcSrc)), __LINE__);
        }
        $this->BcSrc = $bcSrc;
        return $this;
    }

    /**
     * Get Prio value
     *
     * @return bool
     */
    public function getPrio()
    {
        return $this->Prio;
    }

    /**
     * Set Prio value
     *
     * @param bool $prio
     *
     * @return self
     */
    public function setPrio($prio = null)
    {
        // validation for constraint: boolean
        if (null !== $prio && !\is_bool($prio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prio, true), \gettype($prio)), __LINE__);
        }
        $this->Prio = $prio;
        return $this;
    }

    /**
     * Get DeliveryRecordPosition value
     *
     * @return int
     */
    public function getDeliveryRecordPosition()
    {
        return $this->DeliveryRecordPosition;
    }

    /**
     * Set DeliveryRecordPosition value
     *
     * @param int $deliveryRecordPosition
     *
     * @return self
     */
    public function setDeliveryRecordPosition($deliveryRecordPosition = null)
    {
        // validation for constraint: int
        if (null !== $deliveryRecordPosition && !(\is_int($deliveryRecordPosition) || ctype_digit($deliveryRecordPosition))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryRecordPosition, true), \gettype($deliveryRecordPosition)), __LINE__);
        }
        $this->DeliveryRecordPosition = $deliveryRecordPosition;
        return $this;
    }

    /**
     * Get OnTourAppended value
     *
     * @return bool
     */
    public function getOnTourAppended()
    {
        return $this->OnTourAppended;
    }

    /**
     * Set OnTourAppended value
     *
     * @param bool $onTourAppended
     *
     * @return self
     */
    public function setOnTourAppended($onTourAppended = null)
    {
        // validation for constraint: boolean
        if (null !== $onTourAppended && !\is_bool($onTourAppended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onTourAppended, true), \gettype($onTourAppended)), __LINE__);
        }
        $this->OnTourAppended = $onTourAppended;
        return $this;
    }

    /**
     * Get TDVHit value
     *
     * @return bool
     */
    public function getTDVHit()
    {
        return $this->TDVHit;
    }

    /**
     * Set TDVHit value
     *
     * @param bool $tDVHit
     *
     * @return self
     */
    public function setTDVHit($tDVHit = null)
    {
        // validation for constraint: boolean
        if (null !== $tDVHit && !\is_bool($tDVHit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tDVHit, true), \gettype($tDVHit)), __LINE__);
        }
        $this->TDVHit = $tDVHit;
        return $this;
    }

    /**
     * Get BcId value
     *
     * @return string|null
     */
    public function getBcId()
    {
        return $this->BcId;
    }

    /**
     * Set BcId value
     *
     * @param string $bcId
     *
     * @return self
     */
    public function setBcId($bcId = null)
    {
        // validation for constraint: string
        if (null !== $bcId && !\is_string($bcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcId, true), \gettype($bcId)), __LINE__);
        }
        $this->BcId = $bcId;
        return $this;
    }

    /**
     * Get Barcode value
     *
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     *
     * @param string $barcode
     *
     * @return self
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;
        return $this;
    }

    /**
     * Get DeliveryNotificationNumber value
     *
     * @return string|null
     */
    public function getDeliveryNotificationNumber()
    {
        return $this->DeliveryNotificationNumber;
    }

    /**
     * Set DeliveryNotificationNumber value
     *
     * @param string $deliveryNotificationNumber
     *
     * @return self
     */
    public function setDeliveryNotificationNumber($deliveryNotificationNumber = null)
    {
        // validation for constraint: string
        if (null !== $deliveryNotificationNumber && !\is_string($deliveryNotificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryNotificationNumber, true), \gettype($deliveryNotificationNumber)), __LINE__);
        }
        $this->DeliveryNotificationNumber = $deliveryNotificationNumber;
        return $this;
    }

    /**
     * Get Comment value
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Set Comment value
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment($comment = null)
    {
        // validation for constraint: string
        if (null !== $comment && !\is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), \gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;
        return $this;
    }

    /**
     * Get TimeWindowFrom value
     *
     * @return string|null
     */
    public function getTimeWindowFrom()
    {
        return $this->TimeWindowFrom;
    }

    /**
     * Set TimeWindowFrom value
     *
     * @param string $timeWindowFrom
     *
     * @return self
     */
    public function setTimeWindowFrom($timeWindowFrom = null)
    {
        // validation for constraint: string
        if (null !== $timeWindowFrom && !\is_string($timeWindowFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeWindowFrom, true), \gettype($timeWindowFrom)), __LINE__);
        }
        $this->TimeWindowFrom = $timeWindowFrom;
        return $this;
    }

    /**
     * Get TimeWindowTo value
     *
     * @return string|null
     */
    public function getTimeWindowTo()
    {
        return $this->TimeWindowTo;
    }

    /**
     * Set TimeWindowTo value
     *
     * @param string $timeWindowTo
     *
     * @return self
     */
    public function setTimeWindowTo($timeWindowTo = null)
    {
        // validation for constraint: string
        if (null !== $timeWindowTo && !\is_string($timeWindowTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeWindowTo, true), \gettype($timeWindowTo)), __LINE__);
        }
        $this->TimeWindowTo = $timeWindowTo;
        return $this;
    }

    /**
     * Get TDVAddressRef value
     *
     * @return string|null
     */
    public function getTDVAddressRef()
    {
        return $this->TDVAddressRef;
    }

    /**
     * Set TDVAddressRef value
     *
     * @param string $tDVAddressRef
     *
     * @return self
     */
    public function setTDVAddressRef($tDVAddressRef = null)
    {
        // validation for constraint: string
        if (null !== $tDVAddressRef && !\is_string($tDVAddressRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tDVAddressRef, true), \gettype($tDVAddressRef)), __LINE__);
        }
        $this->TDVAddressRef = $tDVAddressRef;
        return $this;
    }
}
