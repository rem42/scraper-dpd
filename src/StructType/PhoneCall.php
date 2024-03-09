<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneCall StructType
 */
class PhoneCall extends AbstractStructBase
{
    /**
     * The DurationSec
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $DurationSec;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $Date;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Number;
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
     * Constructor method for PhoneCall
     *
     * @uses PhoneCall::setDurationSec()
     * @uses PhoneCall::setDate()
     * @uses PhoneCall::setNumber()
     * @uses PhoneCall::setType()
     *
     * @param int    $durationSec
     * @param string $date
     * @param string $number
     * @param string $type
     */
    public function __construct($durationSec = null, $date = null, $number = null, $type = null)
    {
        $this
            ->setDurationSec($durationSec)
            ->setDate($date)
            ->setNumber($number)
            ->setType($type)
        ;
    }

    /**
     * Get DurationSec value
     *
     * @return int
     */
    public function getDurationSec()
    {
        return $this->DurationSec;
    }

    /**
     * Set DurationSec value
     *
     * @param int $durationSec
     *
     * @return self
     */
    public function setDurationSec($durationSec = null)
    {
        // validation for constraint: int
        if (null !== $durationSec && !(\is_int($durationSec) || ctype_digit($durationSec))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationSec, true), \gettype($durationSec)), __LINE__);
        }
        $this->DurationSec = $durationSec;
        return $this;
    }

    /**
     * Get Date value
     *
     * @return string
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
     * Get Number value
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }

    /**
     * Set Number value
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (null !== $number && !\is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), \gettype($number)), __LINE__);
        }
        $this->Number = $number;
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
}
