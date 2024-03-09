<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Task StructType
 */
class Task extends AbstractStructBase
{
    /**
     * The NotProcessed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $NotProcessed;
    /**
     * The Finished
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $Finished;
    /**
     * The CreatedAt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $CreatedAt;
    /**
     * The OnPositionAt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $OnPositionAt;
    /**
     * The FinishedAt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $FinishedAt;
    /**
     * The VisitCounter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $VisitCounter;
    /**
     * The TaskId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $TaskId;
    /**
     * The IsB2C
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsB2C;
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
     * The Parcels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel
     */
    public $Parcels;
    /**
     * The ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ContactName;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Location
     */
    public $Location;
    /**
     * The Rendezvous
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var Rendezvous
     */
    public $Rendezvous;
    /**
     * The PhoneCalls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall
     */
    public $PhoneCalls;

    /**
     * Constructor method for Task
     *
     * @uses Task::setNotProcessed()
     * @uses Task::setFinished()
     * @uses Task::setCreatedAt()
     * @uses Task::setOnPositionAt()
     * @uses Task::setFinishedAt()
     * @uses Task::setVisitCounter()
     * @uses Task::setTaskId()
     * @uses Task::setIsB2C()
     * @uses Task::setType()
     * @uses Task::setParcels()
     * @uses Task::setContactName()
     * @uses Task::setLocation()
     * @uses Task::setRendezvous()
     * @uses Task::setPhoneCalls()
     *
     * @param bool   $notProcessed
     * @param bool   $finished
     * @param string $createdAt
     * @param string $onPositionAt
     * @param string $finishedAt
     * @param int    $visitCounter
     * @param int    $taskId
     * @param bool   $isB2C
     * @param string $type
     * @param string $contactName
     */
    public function __construct($notProcessed = null, $finished = null, $createdAt = null, $onPositionAt = null, $finishedAt = null, $visitCounter = null, $taskId = null, $isB2C = null, $type = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel $parcels = null, $contactName = null, ?Location $location = null, ?Rendezvous $rendezvous = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $phoneCalls = null)
    {
        $this
            ->setNotProcessed($notProcessed)
            ->setFinished($finished)
            ->setCreatedAt($createdAt)
            ->setOnPositionAt($onPositionAt)
            ->setFinishedAt($finishedAt)
            ->setVisitCounter($visitCounter)
            ->setTaskId($taskId)
            ->setIsB2C($isB2C)
            ->setType($type)
            ->setParcels($parcels)
            ->setContactName($contactName)
            ->setLocation($location)
            ->setRendezvous($rendezvous)
            ->setPhoneCalls($phoneCalls)
        ;
    }

    /**
     * Get NotProcessed value
     *
     * @return bool
     */
    public function getNotProcessed()
    {
        return $this->NotProcessed;
    }

    /**
     * Set NotProcessed value
     *
     * @param bool $notProcessed
     *
     * @return self
     */
    public function setNotProcessed($notProcessed = null)
    {
        // validation for constraint: boolean
        if (null !== $notProcessed && !\is_bool($notProcessed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notProcessed, true), \gettype($notProcessed)), __LINE__);
        }
        $this->NotProcessed = $notProcessed;
        return $this;
    }

    /**
     * Get Finished value
     *
     * @return bool
     */
    public function getFinished()
    {
        return $this->Finished;
    }

    /**
     * Set Finished value
     *
     * @param bool $finished
     *
     * @return self
     */
    public function setFinished($finished = null)
    {
        // validation for constraint: boolean
        if (null !== $finished && !\is_bool($finished)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finished, true), \gettype($finished)), __LINE__);
        }
        $this->Finished = $finished;
        return $this;
    }

    /**
     * Get CreatedAt value
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * Set CreatedAt value
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt = null)
    {
        // validation for constraint: string
        if (null !== $createdAt && !\is_string($createdAt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), \gettype($createdAt)), __LINE__);
        }
        $this->CreatedAt = $createdAt;
        return $this;
    }

    /**
     * Get OnPositionAt value
     *
     * @return string
     */
    public function getOnPositionAt()
    {
        return $this->OnPositionAt;
    }

    /**
     * Set OnPositionAt value
     *
     * @param string $onPositionAt
     *
     * @return self
     */
    public function setOnPositionAt($onPositionAt = null)
    {
        // validation for constraint: string
        if (null !== $onPositionAt && !\is_string($onPositionAt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($onPositionAt, true), \gettype($onPositionAt)), __LINE__);
        }
        $this->OnPositionAt = $onPositionAt;
        return $this;
    }

    /**
     * Get FinishedAt value
     *
     * @return string
     */
    public function getFinishedAt()
    {
        return $this->FinishedAt;
    }

    /**
     * Set FinishedAt value
     *
     * @param string $finishedAt
     *
     * @return self
     */
    public function setFinishedAt($finishedAt = null)
    {
        // validation for constraint: string
        if (null !== $finishedAt && !\is_string($finishedAt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finishedAt, true), \gettype($finishedAt)), __LINE__);
        }
        $this->FinishedAt = $finishedAt;
        return $this;
    }

    /**
     * Get VisitCounter value
     *
     * @return int
     */
    public function getVisitCounter()
    {
        return $this->VisitCounter;
    }

    /**
     * Set VisitCounter value
     *
     * @param int $visitCounter
     *
     * @return self
     */
    public function setVisitCounter($visitCounter = null)
    {
        // validation for constraint: int
        if (null !== $visitCounter && !(\is_int($visitCounter) || ctype_digit($visitCounter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visitCounter, true), \gettype($visitCounter)), __LINE__);
        }
        $this->VisitCounter = $visitCounter;
        return $this;
    }

    /**
     * Get TaskId value
     *
     * @return int
     */
    public function getTaskId()
    {
        return $this->TaskId;
    }

    /**
     * Set TaskId value
     *
     * @param int $taskId
     *
     * @return self
     */
    public function setTaskId($taskId = null)
    {
        // validation for constraint: int
        if (null !== $taskId && !(\is_int($taskId) || ctype_digit($taskId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskId, true), \gettype($taskId)), __LINE__);
        }
        $this->TaskId = $taskId;
        return $this;
    }

    /**
     * Get IsB2C value
     *
     * @return bool
     */
    public function getIsB2C()
    {
        return $this->IsB2C;
    }

    /**
     * Set IsB2C value
     *
     * @param bool $isB2C
     *
     * @return self
     */
    public function setIsB2C($isB2C = null)
    {
        // validation for constraint: boolean
        if (null !== $isB2C && !\is_bool($isB2C)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isB2C, true), \gettype($isB2C)), __LINE__);
        }
        $this->IsB2C = $isB2C;
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
     * Get Parcels value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel|null
     */
    public function getParcels()
    {
        return $this->Parcels;
    }

    /**
     * Set Parcels value
     *
     * @return self
     */
    public function setParcels(?\Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel $parcels = null)
    {
        $this->Parcels = $parcels;
        return $this;
    }

    /**
     * Get ContactName value
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->ContactName;
    }

    /**
     * Set ContactName value
     *
     * @param string $contactName
     *
     * @return self
     */
    public function setContactName($contactName = null)
    {
        // validation for constraint: string
        if (null !== $contactName && !\is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), \gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;
        return $this;
    }

    /**
     * Get Location value
     *
     * @return Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * Set Location value
     *
     * @return self
     */
    public function setLocation(?Location $location = null)
    {
        $this->Location = $location;
        return $this;
    }

    /**
     * Get Rendezvous value
     *
     * @return Rendezvous|null
     */
    public function getRendezvous()
    {
        return $this->Rendezvous;
    }

    /**
     * Set Rendezvous value
     *
     * @return self
     */
    public function setRendezvous(?Rendezvous $rendezvous = null)
    {
        $this->Rendezvous = $rendezvous;
        return $this;
    }

    /**
     * Get PhoneCalls value
     *
     * @return \Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall|null
     */
    public function getPhoneCalls()
    {
        return $this->PhoneCalls;
    }

    /**
     * Set PhoneCalls value
     *
     * @return self
     */
    public function setPhoneCalls(?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $phoneCalls = null)
    {
        $this->PhoneCalls = $phoneCalls;
        return $this;
    }
}
