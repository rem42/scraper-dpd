<?php

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvData StructType
 */
class RdvData extends AbstractStructBase
{
    /**
     * The DayCheckDone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $DayCheckDone;

    /**
     * Constructor method for RdvData
     *
     * @uses RdvData::setDayCheckDone()
     *
     * @param bool $dayCheckDone
     */
    public function __construct($dayCheckDone = null)
    {
        $this
            ->setDayCheckDone($dayCheckDone)
        ;
    }

    /**
     * Get DayCheckDone value
     *
     * @return bool
     */
    public function getDayCheckDone()
    {
        return $this->DayCheckDone;
    }

    /**
     * Set DayCheckDone value
     *
     * @param bool $dayCheckDone
     *
     * @return self
     */
    public function setDayCheckDone($dayCheckDone = null)
    {
        // validation for constraint: boolean
        if (null !== $dayCheckDone && !\is_bool($dayCheckDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dayCheckDone, true), \gettype($dayCheckDone)), __LINE__);
        }
        $this->DayCheckDone = $dayCheckDone;
        return $this;
    }
}
